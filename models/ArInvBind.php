<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_inv_bind".
 *
 * @property int $bind_id
 * @property string|null $bind_no
 * @property string|null $bind_date
 * @property float|null $bind_amount
 * @property string|null $vendor_reference
 * @property int|null $vendor_id
 * @property int|null $customer_id
 * @property string|null $return_date
 * @property int|null $posted
 * @property int|null $printed
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $customer_reference
 *
 * @property Customer $customer
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ArInvBindDet[] $arInvBindDets
 */
class ArInvBind extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_inv_bind';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bind_id'], 'required'],
            [['bind_id', 'vendor_id', 'customer_id', 'posted', 'printed', 'created_user_id', 'modified_user_id'], 'integer'],
            [['bind_date', 'return_date', 'created_time', 'modified_time'], 'safe'],
            [['bind_amount'], 'number'],
            [['notes'], 'string'],
            [['bind_no', 'vendor_reference'], 'string', 'max' => 20],
            [['customer_reference'], 'string', 'max' => 100],
            [['bind_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
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
            'bind_id' => 'Bind ID',
            'bind_no' => 'Bind No',
            'bind_date' => 'Bind Date',
            'bind_amount' => 'Bind Amount',
            'vendor_reference' => 'Vendor Reference',
            'vendor_id' => 'Vendor ID',
            'customer_id' => 'Customer ID',
            'return_date' => 'Return Date',
            'posted' => 'Posted',
            'printed' => 'Printed',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'customer_reference' => 'Customer Reference',
        ];
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
     * Gets query for [[ArInvBindDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvBindDets()
    {
        return $this->hasMany(ArInvBindDet::className(), ['bind_id' => 'bind_id']);
    }
}
