<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor".
 *
 * @property int $vendor_id
 * @property string|null $vendor_no
 * @property string|null $vendor_name
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
 * @property int|null $ven_type_id
 * @property int|null $ven_group_id
 * @property int|null $tax1_id
 * @property int|null $tax2_id
 * @property string|null $tax_no
 * @property int|null $currency_id
 * @property int|null $cod
 * @property int|null $net_days
 * @property int|null $disc_days
 * @property float|null $disc_pc
 * @property int|null $disabled
 * @property string|null $message_line1
 * @property string|null $message_line2
 * @property int|null $print_message
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $carrier_id
 *
 * @property ApInv[] $apInvs
 * @property ApInvBind[] $apInvBinds
 * @property ApPmt[] $apPmts
 * @property Item[] $items
 * @property NItem[] $nItems
 * @property NPreceipt[] $nPreceipts
 * @property Preceipt[] $preceipts
 * @property Staff[] $staff
 * @property VenBalance[] $venBalances
 * @property Currency[] $currencies
 * @property VenContact[] $venContacts
 * @property VenType $venType
 * @property VenGroup $venGroup
 * @property Tax $tax1
 * @property Tax $tax2
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Carrier $carrier
 */
class Vendor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id'], 'required'],
            [['vendor_id', 'ven_type_id', 'ven_group_id', 'tax1_id', 'tax2_id', 'currency_id', 'cod', 'net_days', 'disc_days', 'disabled', 'print_message', 'created_user_id', 'modified_user_id', 'carrier_id'], 'integer'],
            [['disc_pc'], 'number'],
            [['notes'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['vendor_no'], 'string', 'max' => 20],
            [['vendor_name', 'address_line1', 'address_line2', 'email', 'message_line1', 'message_line2'], 'string', 'max' => 50],
            [['city', 'state_prov', 'country', 'contact', 'phone', 'fax', 'tax_no'], 'string', 'max' => 30],
            [['zipcode'], 'string', 'max' => 5],
            [['webpage'], 'string', 'max' => 100],
            [['vendor_id'], 'unique'],
            [['ven_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => VenType::className(), 'targetAttribute' => ['ven_type_id' => 'ven_type_id']],
            [['ven_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => VenGroup::className(), 'targetAttribute' => ['ven_group_id' => 'ven_group_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
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
            'vendor_id' => 'Vendor ID',
            'vendor_no' => 'Vendor No',
            'vendor_name' => 'Vendor Name',
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
            'ven_type_id' => 'Ven Type ID',
            'ven_group_id' => 'Ven Group ID',
            'tax1_id' => 'Tax1 ID',
            'tax2_id' => 'Tax2 ID',
            'tax_no' => 'Tax No',
            'currency_id' => 'Currency ID',
            'cod' => 'Cod',
            'net_days' => 'Net Days',
            'disc_days' => 'Disc Days',
            'disc_pc' => 'Disc Pc',
            'disabled' => 'Disabled',
            'message_line1' => 'Message Line1',
            'message_line2' => 'Message Line2',
            'print_message' => 'Print Message',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'carrier_id' => 'Carrier ID',
        ];
    }

    /**
     * Gets query for [[ApInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs()
    {
        return $this->hasMany(ApInv::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[ApInvBinds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvBinds()
    {
        return $this->hasMany(ApInvBind::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[ApPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmts()
    {
        return $this->hasMany(ApPmt::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[NItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems()
    {
        return $this->hasMany(NItem::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[NPreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceipts()
    {
        return $this->hasMany(NPreceipt::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[Preceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceipts()
    {
        return $this->hasMany(Preceipt::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[VenBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenBalances()
    {
        return $this->hasMany(VenBalance::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[Currencies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies()
    {
        return $this->hasMany(Currency::className(), ['currency_id' => 'currency_id'])->viaTable('ven_balance', ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[VenContacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenContacts()
    {
        return $this->hasMany(VenContact::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[VenType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenType()
    {
        return $this->hasOne(VenType::className(), ['ven_type_id' => 'ven_type_id']);
    }

    /**
     * Gets query for [[VenGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenGroup()
    {
        return $this->hasOne(VenGroup::className(), ['ven_group_id' => 'ven_group_id']);
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
}
