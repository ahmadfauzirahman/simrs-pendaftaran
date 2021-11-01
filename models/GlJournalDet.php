<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_journal_det".
 *
 * @property int $journal_id
 * @property int $seq
 * @property int|null $account_id
 * @property int|null $location_id
 * @property int|null $currency_id
 * @property float|null $foreign_amount
 * @property float|null $exchange_rate
 * @property int|null $department_id
 * @property string|null $description
 * @property float|null $amount
 *
 * @property Department $department
 * @property GlAccount $account
 * @property GlJournal $journal
 */
class GlJournalDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_journal_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'seq'], 'required'],
            [['journal_id', 'seq', 'account_id', 'location_id', 'currency_id', 'department_id'], 'integer'],
            [['foreign_amount', 'exchange_rate', 'amount'], 'number'],
            [['description'], 'string', 'max' => 200],
            [['journal_id', 'seq'], 'unique', 'targetAttribute' => ['journal_id', 'seq']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'dept_id']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['account_id' => 'account_id']],
            [['journal_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournal::className(), 'targetAttribute' => ['journal_id' => 'journal_id']],
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
            'account_id' => 'Account ID',
            'location_id' => 'Location ID',
            'currency_id' => 'Currency ID',
            'foreign_amount' => 'Foreign Amount',
            'exchange_rate' => 'Exchange Rate',
            'department_id' => 'Department ID',
            'description' => 'Description',
            'amount' => 'Amount',
        ];
    }

    /**
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'department_id']);
    }

    /**
     * Gets query for [[Account]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[Journal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournal()
    {
        return $this->hasOne(GlJournal::className(), ['journal_id' => 'journal_id']);
    }
}
