<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pic_pay".
 *
 * @property int $pay_id
 * @property string|null $pay_no
 * @property string|null $pay_date
 * @property int|null $customer_id
 * @property float|null $amount
 * @property string|null $description
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property PicListArXt[] $picListArXts
 * @property PicListPayXt[] $picListPayXts
 * @property Customer $customer
 * @property ScrtUser $createdUser
 */
class PicPay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pic_pay';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_id'], 'required'],
            [['pay_id', 'customer_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['pay_date', 'created_time', 'modified_time'], 'safe'],
            [['amount'], 'number'],
            [['pay_no'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 60],
            [['pay_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_id' => 'Pay ID',
            'pay_no' => 'Pay No',
            'pay_date' => 'Pay Date',
            'customer_id' => 'Customer ID',
            'amount' => 'Amount',
            'description' => 'Description',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[PicListArXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicListArXts()
    {
        return $this->hasMany(PicListArXt::className(), ['pay_id' => 'pay_id']);
    }

    /**
     * Gets query for [[PicListPayXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicListPayXts()
    {
        return $this->hasMany(PicListPayXt::className(), ['pay_id' => 'pay_id']);
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
}
