<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vendor_service_ext".
 *
 * @property int $vendor_id
 * @property string|null $vendor_name
 * @property string|null $addressline1
 * @property string|null $phone
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ServiceExt[] $serviceExts
 */
class VendorServiceExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vendor_service_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id'], 'required'],
            [['vendor_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['vendor_name', 'addressline1'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 30],
            [['vendor_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
            'vendor_name' => 'Vendor Name',
            'addressline1' => 'Addressline1',
            'phone' => 'Phone',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ServiceExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceExts()
    {
        return $this->hasMany(ServiceExt::className(), ['vendor_id' => 'vendor_id']);
    }
}
