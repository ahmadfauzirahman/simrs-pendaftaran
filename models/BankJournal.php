<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_journal".
 *
 * @property int $journal_id
 * @property string|null $journal_no
 * @property int|null $bank_id
 * @property string|null $check_no
 * @property string|null $journal_date
 * @property string|null $issue_rcv_by
 * @property int|null $gl_period
 * @property int|null $gl_year
 * @property int|null $trans_type
 * @property string|null $description
 * @property float|null $amount
 * @property int|null $currency_id
 * @property float|null $exchange_rate
 * @property string|null $due_date
 * @property int|null $posted
 * @property int|null $printed
 * @property int|null $reconciled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Currency $currency
 * @property Bank $bank
 * @property BankJournalDet[] $bankJournalDets
 */
class BankJournal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_journal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id'], 'required'],
            [['journal_id', 'bank_id', 'gl_period', 'gl_year', 'trans_type', 'currency_id', 'posted', 'printed', 'reconciled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['journal_date', 'due_date', 'created_time', 'modified_time'], 'safe'],
            [['amount', 'exchange_rate'], 'number'],
            [['journal_no', 'check_no'], 'string', 'max' => 20],
            [['issue_rcv_by'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['journal_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bank::className(), 'targetAttribute' => ['bank_id' => 'bank_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'journal_id' => 'Journal ID',
            'journal_no' => 'Journal No',
            'bank_id' => 'Bank ID',
            'check_no' => 'Check No',
            'journal_date' => 'Journal Date',
            'issue_rcv_by' => 'Issue Rcv By',
            'gl_period' => 'Gl Period',
            'gl_year' => 'Gl Year',
            'trans_type' => 'Trans Type',
            'description' => 'Description',
            'amount' => 'Amount',
            'currency_id' => 'Currency ID',
            'exchange_rate' => 'Exchange Rate',
            'due_date' => 'Due Date',
            'posted' => 'Posted',
            'printed' => 'Printed',
            'reconciled' => 'Reconciled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
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
     * Gets query for [[Bank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBank()
    {
        return $this->hasOne(Bank::className(), ['bank_id' => 'bank_id']);
    }

    /**
     * Gets query for [[BankJournalDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournalDets()
    {
        return $this->hasMany(BankJournalDet::className(), ['journal_id' => 'journal_id']);
    }
}
