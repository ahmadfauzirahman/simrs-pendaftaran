<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cus_contact".
 *
 * @property int $customer_id
 * @property int $seq
 * @property string|null $contact_name
 * @property string|null $job_title
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $business_phone
 * @property string|null $home_phone
 * @property string|null $fax
 * @property string|null $cellular
 * @property string|null $email
 * @property string|null $notes
 *
 * @property Customer $customer
 */
class CusContact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cus_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'seq'], 'required'],
            [['customer_id', 'seq'], 'integer'],
            [['notes'], 'string'],
            [['contact_name', 'job_title', 'business_phone', 'home_phone', 'fax', 'cellular'], 'string', 'max' => 30],
            [['address_line1', 'address_line2', 'email'], 'string', 'max' => 50],
            [['customer_id', 'seq'], 'unique', 'targetAttribute' => ['customer_id', 'seq']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'seq' => 'Seq',
            'contact_name' => 'Contact Name',
            'job_title' => 'Job Title',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'business_phone' => 'Business Phone',
            'home_phone' => 'Home Phone',
            'fax' => 'Fax',
            'cellular' => 'Cellular',
            'email' => 'Email',
            'notes' => 'Notes',
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
}
