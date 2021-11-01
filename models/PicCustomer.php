<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pic_customer".
 *
 * @property int $pic_id
 * @property string|null $pic_name
 * @property string|null $phone
 * @property string|null $rek_no
 * @property int|null $bank_id
 * @property int|null $customer_id
 * @property int|null $disabled
 * @property string|null $description
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Customer $customer
 * @property BankXt $bank
 * @property PicListPayXt[] $picListPayXts
 */
class PicCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pic_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pic_id'], 'required'],
            [['pic_id', 'bank_id', 'customer_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['pic_name', 'description'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
            [['rek_no'], 'string', 'max' => 15],
            [['pic_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['bank_id'], 'exist', 'skipOnError' => true, 'targetClass' => BankXt::className(), 'targetAttribute' => ['bank_id' => 'bank_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pic_id' => 'Pic ID',
            'pic_name' => 'Pic Name',
            'phone' => 'Phone',
            'rek_no' => 'Rek No',
            'bank_id' => 'Bank ID',
            'customer_id' => 'Customer ID',
            'disabled' => 'Disabled',
            'description' => 'Description',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
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
     * Gets query for [[Bank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBank()
    {
        return $this->hasOne(BankXt::className(), ['bank_id' => 'bank_id']);
    }

    /**
     * Gets query for [[PicListPayXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicListPayXts()
    {
        return $this->hasMany(PicListPayXt::className(), ['pic_id' => 'pic_id']);
    }
}
