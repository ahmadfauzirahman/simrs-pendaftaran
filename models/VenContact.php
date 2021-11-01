<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ven_contact".
 *
 * @property int $vendor_id
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
 * @property Vendor $vendor
 */
class VenContact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ven_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id', 'seq'], 'required'],
            [['vendor_id', 'seq'], 'integer'],
            [['notes'], 'string'],
            [['contact_name', 'job_title', 'home_phone', 'fax', 'cellular'], 'string', 'max' => 30],
            [['address_line1', 'address_line2', 'business_phone', 'email'], 'string', 'max' => 50],
            [['vendor_id', 'seq'], 'unique', 'targetAttribute' => ['vendor_id', 'seq']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
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
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }
}
