<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_jfo_det".
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
 * @property int|null $item_id
 * @property int|null $item_mtl_id
 * @property int|null $item_kits_id
 * @property int|null $folio_id
 * @property int|null $folio_seq
 * @property int|null $folio_mtl_seq
 * @property int|null $folio_kits_seq
 * @property float|null $folio_line_amount
 * @property int|null $tax1_id
 * @property float|null $tax1_amount
 * @property int|null $tax2_id
 * @property float|null $tax2_amount
 * @property int|null $posted
 * @property int|null $processed
 *
 * @property Currency $currency
 * @property Department $department
 * @property Item $item
 * @property Folio $folio
 * @property Tax $tax1
 * @property Tax $tax2
 * @property GlAccount $account
 * @property GlJournal $journal
 */
class GlJfoDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_jfo_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'seq'], 'required'],
            [['journal_id', 'seq', 'account_id', 'location_id', 'currency_id', 'department_id', 'item_id', 'item_mtl_id', 'item_kits_id', 'folio_id', 'folio_seq', 'folio_mtl_seq', 'folio_kits_seq', 'tax1_id', 'tax2_id', 'posted', 'processed'], 'integer'],
            [['foreign_amount', 'exchange_rate', 'amount', 'folio_line_amount', 'tax1_amount', 'tax2_amount'], 'number'],
            [['description'], 'string', 'max' => 100],
            [['journal_id', 'seq'], 'unique', 'targetAttribute' => ['journal_id', 'seq']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['department_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['department_id' => 'dept_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
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
            'item_id' => 'Item ID',
            'item_mtl_id' => 'Item Mtl ID',
            'item_kits_id' => 'Item Kits ID',
            'folio_id' => 'Folio ID',
            'folio_seq' => 'Folio Seq',
            'folio_mtl_seq' => 'Folio Mtl Seq',
            'folio_kits_seq' => 'Folio Kits Seq',
            'folio_line_amount' => 'Folio Line Amount',
            'tax1_id' => 'Tax1 ID',
            'tax1_amount' => 'Tax1 Amount',
            'tax2_id' => 'Tax2 ID',
            'tax2_amount' => 'Tax2 Amount',
            'posted' => 'Posted',
            'processed' => 'Processed',
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
     * Gets query for [[Department]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'department_id']);
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[Tax1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTax1()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'tax1_id']);
    }

    /**
     * Gets query for [[Tax2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTax2()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'tax2_id']);
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
