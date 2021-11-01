<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "porder".
 *
 * @property int $order_id
 * @property int|null $vendor_id
 * @property string|null $order_no
 * @property string|null $order_date
 * @property string|null $req_received_date
 * @property string|null $term_payment
 * @property int|null $carrier_id
 * @property string|null $ordered_by
 * @property int|null $warehouse_id
 * @property int|null $order_status
 * @property int|null $printed
 * @property int|null $currency_id
 * @property float|null $items_net_amount
 * @property float|null $order_amount
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
 * @property float|null $order_disc_pc
 * @property float|null $order_disc_amount
 * @property int|null $shipto
 * @property string|null $shipto_name
 * @property string|null $shipto_address
 * @property int|null $num_of_receipts
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $ap_invoice_id
 * @property int|null $items_received
 * @property string|null $received_by
 * @property int|null $paid
 * @property string|null $ap_invoice_no
 * @property int|null $bank_id
 * @property string|null $tax_invoice_no
 * @property string|null $tax_invoice_date
 *
 * @property ScrtUser $modifiedUser
 * @property Tax $tax2
 * @property Warehouse $warehouse
 * @property Carrier $carrier
 * @property Tax $taxableTax1
 * @property Tax $taxableTax2
 * @property Tax $taxableTax3
 * @property ScrtUser $createdUser
 * @property Currency $currency
 * @property Tax $tax1
 * @property PorderDet[] $porderDets
 * @property Preceipt[] $preceipts
 */
class Porder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'porder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id'], 'required'],
            [['order_id', 'vendor_id', 'carrier_id', 'warehouse_id', 'order_status', 'printed', 'currency_id', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'shipto', 'num_of_receipts', 'created_user_id', 'modified_user_id', 'ap_invoice_id', 'items_received', 'paid', 'bank_id'], 'integer'],
            [['order_date', 'req_received_date', 'created_time', 'modified_time', 'tax_invoice_date'], 'safe'],
            [['items_net_amount', 'order_amount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'order_disc_pc', 'order_disc_amount'], 'number'],
            [['shipto_address', 'notes'], 'string'],
            [['order_no', 'received_by', 'ap_invoice_no'], 'string', 'max' => 20],
            [['term_payment', 'ordered_by'], 'string', 'max' => 30],
            [['shipto_name', 'tax_invoice_no'], 'string', 'max' => 50],
            [['order_id'], 'unique'],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['carrier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrier::className(), 'targetAttribute' => ['carrier_id' => 'carrier_id']],
            [['taxable_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax1_id' => 'tax_id']],
            [['taxable_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax2_id' => 'tax_id']],
            [['taxable_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax3_id' => 'tax_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'vendor_id' => 'Vendor ID',
            'order_no' => 'Order No',
            'order_date' => 'Order Date',
            'req_received_date' => 'Req Received Date',
            'term_payment' => 'Term Payment',
            'carrier_id' => 'Carrier ID',
            'ordered_by' => 'Ordered By',
            'warehouse_id' => 'Warehouse ID',
            'order_status' => 'Order Status',
            'printed' => 'Printed',
            'currency_id' => 'Currency ID',
            'items_net_amount' => 'Items Net Amount',
            'order_amount' => 'Order Amount',
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
            'order_disc_pc' => 'Order Disc Pc',
            'order_disc_amount' => 'Order Disc Amount',
            'shipto' => 'Shipto',
            'shipto_name' => 'Shipto Name',
            'shipto_address' => 'Shipto Address',
            'num_of_receipts' => 'Num Of Receipts',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'ap_invoice_id' => 'Ap Invoice ID',
            'items_received' => 'Items Received',
            'received_by' => 'Received By',
            'paid' => 'Paid',
            'ap_invoice_no' => 'Ap Invoice No',
            'bank_id' => 'Bank ID',
            'tax_invoice_no' => 'Tax Invoice No',
            'tax_invoice_date' => 'Tax Invoice Date',
        ];
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
     * Gets query for [[Tax2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTax2()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'tax2_id']);
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
     * Gets query for [[Carrier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrier()
    {
        return $this->hasOne(Carrier::className(), ['carrier_id' => 'carrier_id']);
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
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
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
     * Gets query for [[PorderDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorderDets()
    {
        return $this->hasMany(PorderDet::className(), ['order_id' => 'order_id']);
    }

    /**
     * Gets query for [[Preceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceipts()
    {
        return $this->hasMany(Preceipt::className(), ['order_id' => 'order_id']);
    }
}
