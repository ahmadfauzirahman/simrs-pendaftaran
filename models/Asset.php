<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset".
 *
 * @property int $asset_id
 * @property string|null $asset_no
 * @property string|null $asset_name
 * @property string|null $tag_id
 * @property int|null $asset_type_id
 * @property int|null $tax_valuation
 * @property string|null $acquisition_date
 * @property string|null $usage_date
 * @property string|null $disposal_date
 * @property string|null $selling_date
 * @property int|null $life_time
 * @property string|null $life_time_unit
 * @property int|null $asset_gl_acc_id
 * @property int|null $dep_gl_acc_id
 * @property int|null $accdep_gl_acc_id
 * @property int|null $disposal_gl_acc_id
 * @property int|null $sales_gl_acc_id
 * @property string|null $model
 * @property string|null $model_name
 * @property int|null $dep_method
 * @property float|null $rate
 * @property int|null $asset_status
 * @property float|null $asset_value
 * @property float|null $dep_value
 * @property float|null $salvage_value
 * @property int|null $num_of_jvs
 * @property int|null $num_of_posted_jvs
 * @property int|null $location_id
 * @property int|null $asset_group_id
 * @property int|null $dept_id
 * @property string|null $manufacturer
 * @property string|null $mfg_model
 * @property string|null $mfg_date
 * @property string|null $serial_no
 * @property string|null $color
 * @property string|null $marking
 * @property string|null $warranty_date
 * @property string|null $last_mnt_date
 * @property int|null $mnt_period
 * @property resource|null $picture
 * @property string|null $remark
 * @property string|null $policy_no
 * @property string|null $ins_date
 * @property string|null $ins_company
 * @property string|null $ins_address
 * @property string|null $ins_city
 * @property string|null $ins_term
 * @property float|null $ins_value
 * @property string|null $ins_validity_from
 * @property string|null $ins_validity_to
 * @property string|null $user_name
 * @property string|null $user_title
 * @property string|null $person_in_charge
 * @property string|null $maintenanced_by
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property AssetGroup $assetGroup
 * @property ScrtUser $modifiedUser
 * @property AssetType $assetType
 * @property Location $location
 * @property GlAccount $assetGlAcc
 * @property GlAccount $depGlAcc
 * @property GlAccount $accdepGlAcc
 * @property GlAccount $disposalGlAcc
 * @property GlAccount $salesGlAcc
 * @property ScrtUser $createdUser
 * @property AssetDepPeriod[] $assetDepPeriods
 * @property AssetDepYear[] $assetDepYears
 * @property AssetMv[] $assetMvs
 * @property AssetMvDet[] $assetMvDets
 * @property MaintAct[] $maintActs
 * @property ServiceExt[] $serviceExts
 */
class Asset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id'], 'required'],
            [['asset_id', 'asset_type_id', 'tax_valuation', 'life_time', 'asset_gl_acc_id', 'dep_gl_acc_id', 'accdep_gl_acc_id', 'disposal_gl_acc_id', 'sales_gl_acc_id', 'dep_method', 'asset_status', 'num_of_jvs', 'num_of_posted_jvs', 'location_id', 'asset_group_id', 'dept_id', 'mnt_period', 'created_user_id', 'modified_user_id'], 'integer'],
            [['acquisition_date', 'usage_date', 'disposal_date', 'selling_date', 'mfg_date', 'warranty_date', 'last_mnt_date', 'ins_date', 'ins_validity_from', 'ins_validity_to', 'created_time', 'modified_time'], 'safe'],
            [['rate', 'asset_value', 'dep_value', 'salvage_value', 'ins_value'], 'number'],
            [['picture', 'notes'], 'string'],
            [['asset_no', 'tag_id', 'model', 'model_name', 'mfg_model', 'serial_no', 'color', 'marking', 'policy_no', 'ins_city', 'ins_term'], 'string', 'max' => 20],
            [['asset_name'], 'string', 'max' => 50],
            [['life_time_unit', 'user_name', 'user_title'], 'string', 'max' => 10],
            [['manufacturer', 'ins_address'], 'string', 'max' => 40],
            [['remark', 'ins_company', 'person_in_charge', 'maintenanced_by'], 'string', 'max' => 30],
            [['tag_id'], 'unique'],
            [['asset_id'], 'unique'],
            [['asset_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => AssetGroup::className(), 'targetAttribute' => ['asset_group_id' => 'asset_group_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['asset_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AssetType::className(), 'targetAttribute' => ['asset_type_id' => 'asset_type_id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['asset_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['asset_gl_acc_id' => 'account_id']],
            [['dep_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['dep_gl_acc_id' => 'account_id']],
            [['accdep_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['accdep_gl_acc_id' => 'account_id']],
            [['disposal_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['disposal_gl_acc_id' => 'account_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'asset_id' => 'Asset ID',
            'asset_no' => 'Asset No',
            'asset_name' => 'Asset Name',
            'tag_id' => 'Tag ID',
            'asset_type_id' => 'Asset Type ID',
            'tax_valuation' => 'Tax Valuation',
            'acquisition_date' => 'Acquisition Date',
            'usage_date' => 'Usage Date',
            'disposal_date' => 'Disposal Date',
            'selling_date' => 'Selling Date',
            'life_time' => 'Life Time',
            'life_time_unit' => 'Life Time Unit',
            'asset_gl_acc_id' => 'Asset Gl Acc ID',
            'dep_gl_acc_id' => 'Dep Gl Acc ID',
            'accdep_gl_acc_id' => 'Accdep Gl Acc ID',
            'disposal_gl_acc_id' => 'Disposal Gl Acc ID',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'model' => 'Model',
            'model_name' => 'Model Name',
            'dep_method' => 'Dep Method',
            'rate' => 'Rate',
            'asset_status' => 'Asset Status',
            'asset_value' => 'Asset Value',
            'dep_value' => 'Dep Value',
            'salvage_value' => 'Salvage Value',
            'num_of_jvs' => 'Num Of Jvs',
            'num_of_posted_jvs' => 'Num Of Posted Jvs',
            'location_id' => 'Location ID',
            'asset_group_id' => 'Asset Group ID',
            'dept_id' => 'Dept ID',
            'manufacturer' => 'Manufacturer',
            'mfg_model' => 'Mfg Model',
            'mfg_date' => 'Mfg Date',
            'serial_no' => 'Serial No',
            'color' => 'Color',
            'marking' => 'Marking',
            'warranty_date' => 'Warranty Date',
            'last_mnt_date' => 'Last Mnt Date',
            'mnt_period' => 'Mnt Period',
            'picture' => 'Picture',
            'remark' => 'Remark',
            'policy_no' => 'Policy No',
            'ins_date' => 'Ins Date',
            'ins_company' => 'Ins Company',
            'ins_address' => 'Ins Address',
            'ins_city' => 'Ins City',
            'ins_term' => 'Ins Term',
            'ins_value' => 'Ins Value',
            'ins_validity_from' => 'Ins Validity From',
            'ins_validity_to' => 'Ins Validity To',
            'user_name' => 'User Name',
            'user_title' => 'User Title',
            'person_in_charge' => 'Person In Charge',
            'maintenanced_by' => 'Maintenanced By',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[AssetGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetGroup()
    {
        return $this->hasOne(AssetGroup::className(), ['asset_group_id' => 'asset_group_id']);
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
     * Gets query for [[AssetType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetType()
    {
        return $this->hasOne(AssetType::className(), ['asset_type_id' => 'asset_type_id']);
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['location_id' => 'location_id']);
    }

    /**
     * Gets query for [[AssetGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'asset_gl_acc_id']);
    }

    /**
     * Gets query for [[DepGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'dep_gl_acc_id']);
    }

    /**
     * Gets query for [[AccdepGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccdepGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'accdep_gl_acc_id']);
    }

    /**
     * Gets query for [[DisposalGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisposalGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'disposal_gl_acc_id']);
    }

    /**
     * Gets query for [[SalesGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_gl_acc_id']);
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
     * Gets query for [[AssetDepPeriods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetDepPeriods()
    {
        return $this->hasMany(AssetDepPeriod::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[AssetDepYears]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetDepYears()
    {
        return $this->hasMany(AssetDepYear::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[AssetMvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetMvs()
    {
        return $this->hasMany(AssetMv::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[AssetMvDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetMvDets()
    {
        return $this->hasMany(AssetMvDet::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[MaintActs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintActs()
    {
        return $this->hasMany(MaintAct::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[ServiceExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceExts()
    {
        return $this->hasMany(ServiceExt::className(), ['asset_id' => 'asset_id']);
    }
}
