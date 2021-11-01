<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_inv".
 *
 * @property int $invoice_id
 * @property string|null $invoice_no
 * @property string|null $invoice_date
 * @property int|null $gl_year
 * @property int|null $gl_period
 * @property int|null $customer_id
 * @property int|null $warehouse_id
 * @property int|null $salesman_id
 * @property int|null $currency_id
 * @property int|null $location_id
 * @property float|null $exchange_rate
 * @property float|null $taxation_rate
 * @property int|null $disc_days
 * @property float|null $disc_pc
 * @property int|null $net_days
 * @property int|null $cod
 * @property float|null $items_net_amount
 * @property float|null $invoice_disc_pc
 * @property float|null $invoice_disc_amount
 * @property float|null $invoice_amount
 * @property float|null $writeoff_amount
 * @property float|null $owing_amount
 * @property float|null $payment_discount
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
 * @property int|null $printed
 * @property string|null $purchase_order_no
 * @property string|null $shipto_name
 * @property string|null $shipto_address
 * @property int|null $return_invoice
 * @property int|null $return_ref_invoice_id
 * @property string|null $return_ref_invoice_no
 * @property int|null $authorized_user_id
 * @property string|null $authorized_reason
 * @property string|null $notes
 * @property int|null $pic_pay_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $invoice_type
 * @property float|null $dp_amount
 * @property int|null $invoice_content
 * @property string|null $tax_invoice_no
 * @property string|null $tax_invoice_date
 * @property string|null $invoice_send_date
 * @property string|null $invoice_receive_date
 * @property string|null $invoice_return_date
 * @property string|null $ship_from
 * @property string|null $ship_until
 * @property int|null $staff_id
 *
 * @property ArInv $returnRefInvoice
 * @property ArInv[] $arInvs
 * @property ScrtUser $authorizedUser
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Warehouse $warehouse
 * @property Salesman $salesman
 * @property Currency $currency
 * @property Tax $tax1
 * @property Tax $tax2
 * @property Tax $taxableTax1
 * @property Tax $taxableTax2
 * @property Tax $taxableTax3
 * @property Customer $customer
 * @property ArInvBindDet[] $arInvBindDets
 * @property ArInvDet[] $arInvDets
 * @property ArInvOther[] $arInvOthers
 * @property ArPmtDet[] $arPmtDets
 * @property BillingPmtArDet[] $billingPmtArDets
 * @property BillingPmtAr[] $processes
 * @property BillingPmtDet[] $billingPmtDets
 * @property PicListArXt[] $picListArXts
 */
class ArInv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_inv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id'], 'required'],
            [['invoice_id', 'gl_year', 'gl_period', 'customer_id', 'warehouse_id', 'salesman_id', 'currency_id', 'location_id', 'disc_days', 'net_days', 'cod', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'posted', 'printed', 'return_invoice', 'return_ref_invoice_id', 'authorized_user_id', 'pic_pay_id', 'created_user_id', 'modified_user_id', 'invoice_type', 'invoice_content', 'staff_id'], 'integer'],
            [['invoice_date', 'created_time', 'modified_time', 'tax_invoice_date', 'invoice_send_date', 'invoice_receive_date', 'invoice_return_date', 'ship_from', 'ship_until'], 'safe'],
            [['exchange_rate', 'taxation_rate', 'disc_pc', 'items_net_amount', 'invoice_disc_pc', 'invoice_disc_amount', 'invoice_amount', 'writeoff_amount', 'owing_amount', 'payment_discount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'dp_amount'], 'number'],
            [['shipto_address', 'notes'], 'string'],
            [['invoice_no', 'purchase_order_no', 'return_ref_invoice_no'], 'string', 'max' => 20],
            [['shipto_name', 'tax_invoice_no'], 'string', 'max' => 50],
            [['authorized_reason'], 'string', 'max' => 100],
            [['invoice_id'], 'unique'],
            [['return_ref_invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['return_ref_invoice_id' => 'invoice_id']],
            [['authorized_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['authorized_user_id' => 'user_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['salesman_id'], 'exist', 'skipOnError' => true, 'targetClass' => Salesman::className(), 'targetAttribute' => ['salesman_id' => 'salesman_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
            [['taxable_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax1_id' => 'tax_id']],
            [['taxable_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax2_id' => 'tax_id']],
            [['taxable_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax3_id' => 'tax_id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
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
            'gl_year' => 'Gl Year',
            'gl_period' => 'Gl Period',
            'customer_id' => 'Customer ID',
            'warehouse_id' => 'Warehouse ID',
            'salesman_id' => 'Salesman ID',
            'currency_id' => 'Currency ID',
            'location_id' => 'Location ID',
            'exchange_rate' => 'Exchange Rate',
            'taxation_rate' => 'Taxation Rate',
            'disc_days' => 'Disc Days',
            'disc_pc' => 'Disc Pc',
            'net_days' => 'Net Days',
            'cod' => 'Cod',
            'items_net_amount' => 'Items Net Amount',
            'invoice_disc_pc' => 'Invoice Disc Pc',
            'invoice_disc_amount' => 'Invoice Disc Amount',
            'invoice_amount' => 'Invoice Amount',
            'writeoff_amount' => 'Writeoff Amount',
            'owing_amount' => 'Owing Amount',
            'payment_discount' => 'Payment Discount',
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
            'printed' => 'Printed',
            'purchase_order_no' => 'Purchase Order No',
            'shipto_name' => 'Shipto Name',
            'shipto_address' => 'Shipto Address',
            'return_invoice' => 'Return Invoice',
            'return_ref_invoice_id' => 'Return Ref Invoice ID',
            'return_ref_invoice_no' => 'Return Ref Invoice No',
            'authorized_user_id' => 'Authorized User ID',
            'authorized_reason' => 'Authorized Reason',
            'notes' => 'Notes',
            'pic_pay_id' => 'Pic Pay ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'invoice_type' => 'Invoice Type',
            'dp_amount' => 'Dp Amount',
            'invoice_content' => 'Invoice Content',
            'tax_invoice_no' => 'Tax Invoice No',
            'tax_invoice_date' => 'Tax Invoice Date',
            'invoice_send_date' => 'Invoice Send Date',
            'invoice_receive_date' => 'Invoice Receive Date',
            'invoice_return_date' => 'Invoice Return Date',
            'ship_from' => 'Ship From',
            'ship_until' => 'Ship Until',
            'staff_id' => 'Staff ID',
        ];
    }

    /**
     * Gets query for [[ReturnRefInvoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturnRefInvoice()
    {
        return $this->hasOne(ArInv::className(), ['invoice_id' => 'return_ref_invoice_id']);
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['return_ref_invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[AuthorizedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthorizedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'authorized_user_id']);
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
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[Salesman]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesman()
    {
        return $this->hasOne(Salesman::className(), ['salesman_id' => 'salesman_id']);
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
     * Gets query for [[TaxableTax1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxableTax1()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'taxable_tax1_id']);
    }

    /**
     * Gets query for [[TaxableTax2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxableTax2()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'taxable_tax2_id']);
    }

    /**
     * Gets query for [[TaxableTax3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxableTax3()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'taxable_tax3_id']);
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[ArInvBindDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvBindDets()
    {
        return $this->hasMany(ArInvBindDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[ArInvDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvDets()
    {
        return $this->hasMany(ArInvDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[ArInvOthers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvOthers()
    {
        return $this->hasMany(ArInvOther::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[ArPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmtDets()
    {
        return $this->hasMany(ArPmtDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[BillingPmtArDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtArDets()
    {
        return $this->hasMany(BillingPmtArDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[Processes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProcesses()
    {
        return $this->hasMany(BillingPmtAr::className(), ['process_id' => 'process_id'])->viaTable('billing_pmt_ar_det', ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[BillingPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtDets()
    {
        return $this->hasMany(BillingPmtDet::className(), ['invoice_id' => 'invoice_id']);
    }

    /**
     * Gets query for [[PicListArXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicListArXts()
    {
        return $this->hasMany(PicListArXt::className(), ['ar_id' => 'invoice_id']);
    }
}
