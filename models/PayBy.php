<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_by".
 *
 * @property int $pay_by_id
 * @property string|null $pay_by_name
 * @property int|null $cos_id
 * @property int|null $closing_payment_id
 * @property int|null $authorize_cos_change
 * @property int|null $dept_availability
 * @property int|null $item_availability
 * @property int|null $follow_cos
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $description
 * @property int|null $check_membership
 * @property int|null $bpjs_online
 * @property int|null $disabled
 * @property string|null $disabled_reason
 * @property string|null $pay_by_group
 * @property string|null $pay_by_group_ext
 * @property int|null $used_by_web_reservation
 *
 * @property DownPayment[] $downPayments
 * @property Patient[] $patients
 * @property Cos $cos
 * @property Payment $closingPayment
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property PayByCos[] $payByCos
 * @property Department[] $depts
 * @property PayByDept[] $payByDepts
 * @property PayByItem[] $payByItems
 * @property Item[] $items
 * @property PayByItemPrice[] $payByItemPrices
 * @property Item[] $items0
 * @property PayByItemPriceMcuExt[] $payByItemPriceMcuExts
 * @property ItemMcuExt[] $items1
 * @property RegSetup[] $regSetups
 * @property Registration[] $registrations
 * @property RegistrationFill[] $registrationFills
 */
class PayBy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_by';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cos_id', 'closing_payment_id', 'authorize_cos_change', 'dept_availability', 'item_availability', 'follow_cos', 'created_user_id', 'modified_user_id', 'check_membership', 'bpjs_online', 'disabled', 'used_by_web_reservation'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['description'], 'string'],
            [['pay_by_name', 'disabled_reason'], 'string', 'max' => 100],
            [['pay_by_group', 'pay_by_group_ext'], 'string', 'max' => 10],
            [['cos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_id' => 'cos_id']],
            [['closing_payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['closing_payment_id' => 'payment_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_by_id' => 'Pay By ID',
            'pay_by_name' => 'Pay By Name',
            'cos_id' => 'Cos ID',
            'closing_payment_id' => 'Closing Payment ID',
            'authorize_cos_change' => 'Authorize Cos Change',
            'dept_availability' => 'Dept Availability',
            'item_availability' => 'Item Availability',
            'follow_cos' => 'Follow Cos',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'description' => 'Description',
            'check_membership' => 'Check Membership',
            'bpjs_online' => 'Bpjs Online',
            'disabled' => 'Disabled',
            'disabled_reason' => 'Disabled Reason',
            'pay_by_group' => 'Pay By Group',
            'pay_by_group_ext' => 'Pay By Group Ext',
            'used_by_web_reservation' => 'Used By Web Reservation',
        ];
    }

    /**
     * Gets query for [[DownPayments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDownPayments()
    {
        return $this->hasMany(DownPayment::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Cos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[ClosingPayment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClosingPayment()
    {
        return $this->hasOne(Payment::className(), ['payment_id' => 'closing_payment_id']);
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
     * Gets query for [[PayByCos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByCos()
    {
        return $this->hasMany(PayByCos::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Depts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepts()
    {
        return $this->hasMany(Department::className(), ['dept_id' => 'dept_id'])->viaTable('pay_by_cos', ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[PayByDepts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByDepts()
    {
        return $this->hasMany(PayByDept::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[PayByItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItems()
    {
        return $this->hasMany(PayByItem::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('pay_by_item', ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[PayByItemPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItemPrices()
    {
        return $this->hasMany(PayByItemPrice::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Items0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems0()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('pay_by_item_price', ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[PayByItemPriceMcuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItemPriceMcuExts()
    {
        return $this->hasMany(PayByItemPriceMcuExt::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Items1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems1()
    {
        return $this->hasMany(ItemMcuExt::className(), ['item_id' => 'item_id'])->viaTable('pay_by_item_price_mcu_ext', ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[RegSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups()
    {
        return $this->hasMany(RegSetup::className(), ['self_payby_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[Registrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[RegistrationFills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationFills()
    {
        return $this->hasMany(RegistrationFill::className(), ['pay_by_id' => 'pay_by_id']);
    }
}
