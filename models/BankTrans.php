<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_trans".
 *
 * @property int $transaction_id
 * @property string|null $transaction_name
 * @property int|null $gl_account_id
 * @property int|null $location_id
 * @property int|null $created_user_id
 * @property string $created_time
 * @property int|null $modified_user_id
 * @property string $modified_time
 *
 * @property BankJournalDet[] $bankJournalDets
 */
class BankTrans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_trans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gl_account_id', 'location_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['transaction_name'], 'string', 'max' => 50],
            [['transaction_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transaction_id' => 'Transaction ID',
            'transaction_name' => 'Transaction Name',
            'gl_account_id' => 'Gl Account ID',
            'location_id' => 'Location ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[BankJournalDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournalDets()
    {
        return $this->hasMany(BankJournalDet::className(), ['transaction_id' => 'transaction_id']);
    }
}
