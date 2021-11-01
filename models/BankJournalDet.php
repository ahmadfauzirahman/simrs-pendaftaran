<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_journal_det".
 *
 * @property int $journal_id
 * @property int $seq
 * @property int|null $transaction_id
 * @property int|null $currency_id
 * @property float|null $amount
 * @property float|null $exchange_rate
 * @property string|null $description
 *
 * @property Currency $currency
 * @property BankTrans $transaction
 * @property BankJournal $journal
 */
class BankJournalDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_journal_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'seq'], 'required'],
            [['journal_id', 'seq', 'transaction_id', 'currency_id'], 'integer'],
            [['amount', 'exchange_rate'], 'number'],
            [['description'], 'string', 'max' => 50],
            [['journal_id', 'seq'], 'unique', 'targetAttribute' => ['journal_id', 'seq']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['transaction_id'], 'exist', 'skipOnError' => true, 'targetClass' => BankTrans::className(), 'targetAttribute' => ['transaction_id' => 'transaction_id']],
            [['journal_id'], 'exist', 'skipOnError' => true, 'targetClass' => BankJournal::className(), 'targetAttribute' => ['journal_id' => 'journal_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'journal_id' => 'Journal ID',
            'seq' => 'Seq',
            'transaction_id' => 'Transaction ID',
            'currency_id' => 'Currency ID',
            'amount' => 'Amount',
            'exchange_rate' => 'Exchange Rate',
            'description' => 'Description',
        ];
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
     * Gets query for [[Transaction]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaction()
    {
        return $this->hasOne(BankTrans::className(), ['transaction_id' => 'transaction_id']);
    }

    /**
     * Gets query for [[Journal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournal()
    {
        return $this->hasOne(BankJournal::className(), ['journal_id' => 'journal_id']);
    }
}
