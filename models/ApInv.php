<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_inv".
 *
 * @property int $invoice_id
 * @property string|null $invoice_no
 * @property string|null $invoice_date
 * @property int|null $vendor_id
 * @property int|null $gl_year
 * @property int|null $gl_period
 * @property int|null $currency_id
 * @property int|null $location_id
 * @property float|null $exchange_rate
 * @property float|null $taxation_rate
 * @property float|null $items_net_amount
 * @property float|null $invoice_disc_pc
 * @property float|null $invoice_disc_amount
 * @property float|null $invoice_amount
 * @property float|null $owing_amount
 * @property float|null $payment_discount
 * @property int|null $cod
 * @property float|null $disc_pc
 * @property int|null $disc_days
 * @property int|null $net_days
 * @property int|null $tax1_id
 * @property int|null $tax2_id
 * @property float|null $tax1_rate
 * @property float|null $tax2_rate
 * @property float|null $tax1_amount
 * @property float|null $tax2_amount
 * @property int|null $taxable_tax1_id
 * @property int|null $taxable_tax2_id
 * @property int|null $taxable_tax3_id
 * @property float|null $taxable_amount1
 * @property float|null $taxable_amount2
 * @property float|null $taxable_amount3
 * @property int|null $posted
 * @property string|null $orders_no
 * @property string|null $receipts_no
 * @property int|null $return_ref_invoice_id
 * @property string|null $return_ref_invoice_no
 * @property int|null $detail_items
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $invoice_type
 * @property float|null $dp_amount
 * @property string|null $tax_invoice_no
 * @property string|null $tax_invoice_date
 *
 * @property ApInv $returnRefInvoice
 * @property ApInv[] $apInvs
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Vendor $vendor
 * @property Currency $currency
 * @property Tax $tax1
 * @property Tax $tax2
 * @property ApInvBindDet[] $apInvBindDets
 * @property ApInvDet[] $apInvDets
 * @property ApInvOther[] $apInvOthers
 * @property ApPmtDet[] $apPmtDets
 * @property NPreceipt[] $nPreceipts
 * @property Preceipt[] $preceipts
 */
class ApInv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_inv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id'], 'required'],
            [['invoice_id', 'vendor_id', 'gl_year', 'gl_period', 'currency_id', 'location_id', 'cod', 'disc_days', 'net_days', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'posted', 'return_ref_invoice_id', 'detail_items', 'created_user_id', 'modified_user_id', 'invoice_type'], 'integer'],
            [['invoice_date', 'created_time', 'modified_time', 'tax_invoice_date'], 'safe'],
            [['exchange_rate', 'taxation_rate', 'items_net_amount', 'invoice_disc_pc', 'invoice_disc_amount', 'invoice_amount', 'owing_amount', 'payment_discount', 'disc_pc', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'dp_amount'], 'number'],
            [['notes'], 'string'],
            [['invoice_no'], 'string', 'max' => 100],
            [['orders_no', 'receipts_no'], 'string', 'max' => 200],
            [['return_ref_invoice_no'], 'string', 'max' => 20],
            [['tax_invoice_no'], 'string', 'max' => 50],
            [['invoice_no'], 'unique'],
            [['invoice_id'], 'unique'],
            [['return_ref_invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApInv::className(), 'targetAttribute' => ['return_ref_invoice_id' => 'invoice_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'invoice_id' => 'Invoice ID',
            'invoice_no' => 'Invoice No',
            'invoice_date' => 'Invoice Date',
            'vendor_id' => 'Vendor ID',
            'gl_year' => 'Gl Year',
            'gl_period' => 'Gl Period',
            'currency_id' => 'Currency ID',
            'location_id' => 'Location ID',
            'exchange_rate' => 'Exchange Rate',
            'taxation_rate' => 'Taxation Rate',
            'items_net_amount' => 'Items Net Amount',
            'invoice_disc_pc' => 'Invoice Disc Pc',
            'invoice_disc_amount' => 'Invoice Disc Amount',
            'invoice_amount' => 'Invoice Amount',
            'owing_amount' => 'Owing Amount',
            'payment_discount' => 'Payment Discount',
            'cod' => 'Cod',
            'disc_pc' => 'Disc Pc',
            'disc_days' => 'Disc Days',
            'net_days' => 'Net Days',
            'tax1_id' => 'Tax1 ID',
            'tax2_id' => 'Tax2 ID',
            'tax1_rate' => 'Tax1 Rate',
            'tax2_rate' => 'Tax2 Rate',
            'tax1_amount' => 'Tax1 Amount',
            'tax2_amount' => 'Tax2 Amount',
            'taxable_tax1_id' => 'Taxable Tax1 ID',
            'taxable_tax2_id' => 'Taxable Tax2 ID',
            'taxable_tax3_id' => 'Taxable Tax3 ID',
            'taxable_amount1' => 'Taxable Amount1',
            'taxable_amount2' => 'Taxable Amount2',
            'taxable_amount3' => 'Taxable Amount3',
            'posted' => 'Posted',
            'orders_no' => 'Orders No',
            'receipts_no' => 'Receipts No',
            'return_ref_invoice_id' => 'Return Ref Invoice ID',
            'return_ref_invoice_no' => 'Return Ref Invoice No',
            'detail_items' => 'Detail Items',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'invoice_type' => 'Invoice Type',
            'dp_amount' => 'Dp Amount',
            'tax_invoice_no' => 'Tax Invoice No',
            'tax_invoice_date' => 'Tax Invoice Date',
        ];
    }

    /**
     * Gets query for [[ReturnRefInvoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturnRefInvoice()
    {
        return $this->hasOne(ApInv::className(), ['invoice_id' => 'return_ref_invoice_id']);
    }

    /**
     * Gets query for [[ApInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs()
    {
        return $this->hasMany(ApInv::className(), ['return_ref_invoice_id' => 'invoice_id']);
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
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
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
     * Gets query for [[ApInvBindDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvBindDets()
    {
        return $this->hasMany(ApInvBindDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[ApInvDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvDets()
    {
        return $this->hasMany(ApInvDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[ApInvOthers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvOthers()
    {
        return $this->hasMany(ApInvOther::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[ApPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmtDets()
    {
        return $this->hasMany(ApPmtDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[NPreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceipts()
    {
        return $this->hasMany(NPreceipt::className(), ['ap_invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[Preceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceipts()
    {
        return $this->hasMany(Preceipt::className(), ['ap_invoice_id' => 'invoice_id']);
    }
}
