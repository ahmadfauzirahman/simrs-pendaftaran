<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sorder".
 *
 * @property int $order_id
 * @property string|null $order_no
 * @property string|null $order_date
 * @property int|null $customer_id
 * @property string|null $req_shipped_date
 * @property string|null $purchase_order_no
 * @property int|null $carrier_id
 * @property int|null $salesman_id
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
 * @property int|null $num_of_shipments
 * @property float|null $order_disc_pc
 * @property float|null $order_disc_amount
 * @property string|null $shipto_name
 * @property string|null $shipto_address
 * @property string|null $notes
 * @property int|null $authorized_user_id
 * @property string|null $authorized_reason
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $disc_days
 * @property int|null $net_days
 * @property float|null $disc_pc
 * @property int|null $cod
 * @property float|null $dp_amount
 * @property int|null $dp_invoiced
 *
 * @property Shipment[] $shipments
 * @property Customer $customer
 * @property ScrtUser $modifiedUser
 * @property Carrier $carrier
 * @property Salesman $salesman
 * @property Currency $currency
 * @property Tax $tax1
 * @property Tax $tax2
 * @property Tax $taxableTax1
 * @property Tax $taxableTax2
 * @property Tax $taxableTax3
 * @property ScrtUser $authorizedUser
 * @property ScrtUser $createdUser
 * @property SorderDet[] $sorderDets
 */
class Sorder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sorder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id'], 'required'],
            [['order_id', 'customer_id', 'carrier_id', 'salesman_id', 'order_status', 'printed', 'currency_id', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'num_of_shipments', 'authorized_user_id', 'created_user_id', 'modified_user_id', 'disc_days', 'net_days', 'cod', 'dp_invoiced'], 'integer'],
            [['order_date', 'req_shipped_date', 'created_time', 'modified_time'], 'safe'],
            [['items_net_amount', 'order_amount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'order_disc_pc', 'order_disc_amount', 'disc_pc', 'dp_amount'], 'number'],
            [['shipto_address', 'notes'], 'string'],
            [['order_no', 'purchase_order_no'], 'string', 'max' => 20],
            [['shipto_name'], 'string', 'max' => 50],
            [['authorized_reason'], 'string', 'max' => 100],
            [['order_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['carrier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrier::className(), 'targetAttribute' => ['carrier_id' => 'carrier_id']],
            [['salesman_id'], 'exist', 'skipOnError' => true, 'targetClass' => Salesman::className(), 'targetAttribute' => ['salesman_id' => 'salesman_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
            [['taxable_tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax1_id' => 'tax_id']],
            [['taxable_tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax2_id' => 'tax_id']],
            [['taxable_tax3_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['taxable_tax3_id' => 'tax_id']],
            [['authorized_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['authorized_user_id' => 'user_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_no' => 'Order No',
            'order_date' => 'Order Date',
            'customer_id' => 'Customer ID',
            'req_shipped_date' => 'Req Shipped Date',
            'purchase_order_no' => 'Purchase Order No',
            'carrier_id' => 'Carrier ID',
            'salesman_id' => 'Salesman ID',
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
            'num_of_shipments' => 'Num Of Shipments',
            'order_disc_pc' => 'Order Disc Pc',
            'order_disc_amount' => 'Order Disc Amount',
            'shipto_name' => 'Shipto Name',
            'shipto_address' => 'Shipto Address',
            'notes' => 'Notes',
            'authorized_user_id' => 'Authorized User ID',
            'authorized_reason' => 'Authorized Reason',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'disc_days' => 'Disc Days',
            'net_days' => 'Net Days',
            'disc_pc' => 'Disc Pc',
            'cod' => 'Cod',
            'dp_amount' => 'Dp Amount',
            'dp_invoiced' => 'Dp Invoiced',
        ];
    }

    /**
     * Gets query for [[Shipments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipments()
    {
        return $this->hasMany(Shipment::className(), ['order_id' => 'order_id']);
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
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
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
     * Gets query for [[SorderDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorderDets()
    {
        return $this->hasMany(SorderDet::className(), ['order_id' => 'order_id']);
    }
}
