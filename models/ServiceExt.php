<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_ext".
 *
 * @property int $service_id
 * @property string|null $service_no
 * @property int|null $asset_id
 * @property int|null $vendor_id
 * @property float|null $items_net_amount
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property float|null $amount
 * @property string|null $service_date
 * @property string|null $staff
 * @property string|null $notes
 * @property string|null $km1
 * @property string|null $km2
 * @property string|null $km3
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $posted
 *
 * @property VendorServiceExt $vendor
 * @property Asset $asset
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ServiceExtDat[] $serviceExtDats
 */
class ServiceExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id'], 'required'],
            [['service_id', 'asset_id', 'vendor_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['items_net_amount', 'disc_pc', 'disc_amount', 'amount'], 'number'],
            [['service_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['service_no', 'staff', 'km1', 'km2', 'km3'], 'string', 'max' => 20],
            [['service_id'], 'unique'],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => VendorServiceExt::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
            [['asset_id'], 'exist', 'skipOnError' => true, 'targetClass' => Asset::className(), 'targetAttribute' => ['asset_id' => 'asset_id']],
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
            'service_id' => 'Service ID',
            'service_no' => 'Service No',
            'asset_id' => 'Asset ID',
            'vendor_id' => 'Vendor ID',
            'items_net_amount' => 'Items Net Amount',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'amount' => 'Amount',
            'service_date' => 'Service Date',
            'staff' => 'Staff',
            'notes' => 'Notes',
            'km1' => 'Km1',
            'km2' => 'Km2',
            'km3' => 'Km3',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(VendorServiceExt::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[Asset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsset()
    {
        return $this->hasOne(Asset::className(), ['asset_id' => 'asset_id']);
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
     * Gets query for [[ServiceExtDats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceExtDats()
    {
        return $this->hasMany(ServiceExtDat::className(), ['service_id' => 'service_id']);
    }
}
