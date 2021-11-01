<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $customer_id
 * @property string|null $customer_no
 * @property string|null $customer_name
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $city
 * @property string|null $state_prov
 * @property string|null $zipcode
 * @property string|null $country
 * @property string|null $contact
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $webpage
 * @property int|null $cus_type_id
 * @property int|null $cus_group_id
 * @property int|null $tax1_id
 * @property int|null $tax2_id
 * @property string|null $tax1_exemption_no
 * @property string|null $tax2_exemption_no
 * @property string|null $tax_no
 * @property int|null $currency_id
 * @property int|null $credit_limit_enabled
 * @property float|null $credit_limit_amount
 * @property int|null $credit_limit_restriction
 * @property float|null $disc_pc
 * @property int|null $disc_days
 * @property int|null $net_days
 * @property int|null $cod
 * @property int|null $disabled
 * @property int|null $print_message
 * @property int|null $allow_backorders
 * @property int|null $salesman_id
 * @property int|null $shipment_contact_seq
 * @property string|null $message_line1
 * @property string|null $message_line2
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $carrier_id
 *
 * @property ArInv[] $arInvs
 * @property ArInvBind[] $arInvBinds
 * @property ArPmt[] $arPmts
 * @property CusBalance[] $cusBalances
 * @property CusContact[] $cusContacts
 * @property CusType $cusType
 * @property CusGroup $cusGroup
 * @property Tax $tax1
 * @property Tax $tax2
 * @property Currency $currency
 * @property Salesman $salesman
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Carrier $carrier
 * @property CustomerItemPrice[] $customerItemPrices
 * @property Item[] $items
 * @property Payment[] $payments
 * @property PicCustomer[] $picCustomers
 * @property PicPay[] $picPays
 * @property Shipment[] $shipments
 * @property Sorder[] $sorders
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id', 'cus_type_id', 'cus_group_id', 'tax1_id', 'tax2_id', 'currency_id', 'credit_limit_enabled', 'credit_limit_restriction', 'disc_days', 'net_days', 'cod', 'disabled', 'print_message', 'allow_backorders', 'salesman_id', 'shipment_contact_seq', 'created_user_id', 'modified_user_id', 'carrier_id'], 'integer'],
            [['credit_limit_amount', 'disc_pc'], 'number'],
            [['notes'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['customer_no'], 'string', 'max' => 20],
            [['customer_name', 'address_line1', 'address_line2', 'email', 'message_line1', 'message_line2'], 'string', 'max' => 50],
            [['city', 'state_prov', 'country', 'contact', 'phone', 'fax', 'tax1_exemption_no', 'tax2_exemption_no', 'tax_no'], 'string', 'max' => 30],
            [['zipcode'], 'string', 'max' => 5],
            [['webpage'], 'string', 'max' => 100],
            [['customer_id'], 'unique'],
            [['cus_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => CusType::className(), 'targetAttribute' => ['cus_type_id' => 'cus_type_id']],
            [['cus_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => CusGroup::className(), 'targetAttribute' => ['cus_group_id' => 'cus_group_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['salesman_id'], 'exist', 'skipOnError' => true, 'targetClass' => Salesman::className(), 'targetAttribute' => ['salesman_id' => 'salesman_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['carrier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Carrier::className(), 'targetAttribute' => ['carrier_id' => 'carrier_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'customer_no' => 'Customer No',
            'customer_name' => 'Customer Name',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'city' => 'City',
            'state_prov' => 'State Prov',
            'zipcode' => 'Zipcode',
            'country' => 'Country',
            'contact' => 'Contact',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'webpage' => 'Webpage',
            'cus_type_id' => 'Cus Type ID',
            'cus_group_id' => 'Cus Group ID',
            'tax1_id' => 'Tax1 ID',
            'tax2_id' => 'Tax2 ID',
            'tax1_exemption_no' => 'Tax1 Exemption No',
            'tax2_exemption_no' => 'Tax2 Exemption No',
            'tax_no' => 'Tax No',
            'currency_id' => 'Currency ID',
            'credit_limit_enabled' => 'Credit Limit Enabled',
            'credit_limit_amount' => 'Credit Limit Amount',
            'credit_limit_restriction' => 'Credit Limit Restriction',
            'disc_pc' => 'Disc Pc',
            'disc_days' => 'Disc Days',
            'net_days' => 'Net Days',
            'cod' => 'Cod',
            'disabled' => 'Disabled',
            'print_message' => 'Print Message',
            'allow_backorders' => 'Allow Backorders',
            'salesman_id' => 'Salesman ID',
            'shipment_contact_seq' => 'Shipment Contact Seq',
            'message_line1' => 'Message Line1',
            'message_line2' => 'Message Line2',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'carrier_id' => 'Carrier ID',
        ];
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[ArInvBinds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvBinds()
    {
        return $this->hasMany(ArInvBind::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[ArPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmts()
    {
        return $this->hasMany(ArPmt::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[CusBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCusBalances()
    {
        return $this->hasMany(CusBalance::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[CusContacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCusContacts()
    {
        return $this->hasMany(CusContact::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[CusType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCusType()
    {
        return $this->hasOne(CusType::className(), ['cus_type_id' => 'cus_type_id']);
    }

    /**
     * Gets query for [[CusGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCusGroup()
    {
        return $this->hasOne(CusGroup::className(), ['cus_group_id' => 'cus_group_id']);
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
     * Gets query for [[Currency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['currency_id' => 'currency_id']);
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
     * Gets query for [[Carrier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarrier()
    {
        return $this->hasOne(Carrier::className(), ['carrier_id' => 'carrier_id']);
    }

    /**
     * Gets query for [[CustomerItemPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerItemPrices()
    {
        return $this->hasMany(CustomerItemPrice::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('customer_item_price', ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[PicCustomers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicCustomers()
    {
        return $this->hasMany(PicCustomer::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[PicPays]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicPays()
    {
        return $this->hasMany(PicPay::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[Shipments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipments()
    {
        return $this->hasMany(Shipment::className(), ['customer_id' => 'customer_id']);
    }

    /**
     * Gets query for [[Sorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders()
    {
        return $this->hasMany(Sorder::className(), ['customer_id' => 'customer_id']);
    }
}
