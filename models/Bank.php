<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank".
 *
 * @property int $bank_id
 * @property string|null $bank_name
 * @property int|null $gl_account_id
 * @property int|null $currency_id
 * @property int|null $bank_recon
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ApPmt[] $apPmts
 * @property ArPmt[] $arPmts
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Currency $currency
 * @property GlAccount $glAccount
 * @property BankJournal[] $bankJournals
 */
class Bank extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gl_account_id', 'currency_id', 'bank_recon', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['bank_name'], 'string', 'max' => 50],
            [['bank_name'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['gl_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['gl_account_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bank_id' => 'Bank ID',
            'bank_name' => 'Bank Name',
            'gl_account_id' => 'Gl Account ID',
            'currency_id' => 'Currency ID',
            'bank_recon' => 'Bank Recon',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ApPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmts()
    {
        return $this->hasMany(ApPmt::className(), ['bank_id' => 'bank_id']);
    }

    /**
     * Gets query for [[ArPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmts()
    {
        return $this->hasMany(ArPmt::className(), ['bank_id' => 'bank_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[Currency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[GlAccount]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccount()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'gl_account_id']);
    }

    /**
     * Gets query for [[BankJournals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournals()
    {
        return $this->hasMany(BankJournal::className(), ['bank_id' => 'bank_id']);
    }
}
