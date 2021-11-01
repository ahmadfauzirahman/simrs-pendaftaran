<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $staff_id
 * @property string|null $staff_name
 * @property string|null $job_title
 * @property int|null $staff_type_id
 * @property int|null $staff_group_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $profile
 * @property resource|null $photo
 * @property int|null $disabled
 * @property int|null $vendor_id
 * @property string|null $refer_doctor_hfis
 * @property int|null $refer_doctor_bpjs
 *
 * @property Folio[] $folios
 * @property Folio[] $folios0
 * @property FolioOtherExamDoctorNotes[] $folioOtherExamDoctorNotes
 * @property FolioStaff[] $folioStaff
 * @property ItemDist[] $itemDists
 * @property McuExt[] $mcuExts
 * @property StaffType $staffType
 * @property StaffGroup $staffGroup
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Vendor $vendor
 * @property StaffCutiXt[] $staffCutiXts
 * @property StaffDet[] $staffDets
 * @property SubUnit[] $subUnits
 * @property SubUnit[] $subUnits0
 * @property SubUnitStaff[] $subUnitStaff
 * @property Surgery[] $surgeries
 * @property Surgery[] $surgeries0
 * @property Surgery[] $surgeries1
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_type_id', 'staff_group_id', 'created_user_id', 'modified_user_id', 'disabled', 'vendor_id', 'refer_doctor_bpjs'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['profile', 'photo'], 'string'],
            [['staff_name', 'job_title'], 'string', 'max' => 50],
            [['refer_doctor_hfis'], 'string', 'max' => 30],
            [['staff_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffType::className(), 'targetAttribute' => ['staff_type_id' => 'staff_type_id']],
            [['staff_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffGroup::className(), 'targetAttribute' => ['staff_group_id' => 'staff_group_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'staff_name' => 'Staff Name',
            'job_title' => 'Job Title',
            'staff_type_id' => 'Staff Type ID',
            'staff_group_id' => 'Staff Group ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'profile' => 'Profile',
            'photo' => 'Photo',
            'disabled' => 'Disabled',
            'vendor_id' => 'Vendor ID',
            'refer_doctor_hfis' => 'Refer Doctor Hfis',
            'refer_doctor_bpjs' => 'Refer Doctor Bpjs',
        ];
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['primary_doctor_id' => 'staff_id']);
    }

    /**
     * Gets query for [[Folios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios0()
    {
        return $this->hasMany(Folio::className(), ['secondary_doctor_id' => 'staff_id']);
    }

    /**
     * Gets query for [[FolioOtherExamDoctorNotes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioOtherExamDoctorNotes()
    {
        return $this->hasMany(FolioOtherExamDoctorNotes::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[FolioStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioStaff()
    {
        return $this->hasMany(FolioStaff::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[ItemDists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemDists()
    {
        return $this->hasMany(ItemDist::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[McuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuExts()
    {
        return $this->hasMany(McuExt::className(), ['dokter_id' => 'staff_id']);
    }

    /**
     * Gets query for [[StaffType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffType()
    {
        return $this->hasOne(StaffType::className(), ['staff_type_id' => 'staff_type_id']);
    }

    /**
     * Gets query for [[StaffGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffGroup()
    {
        return $this->hasOne(StaffGroup::className(), ['staff_group_id' => 'staff_group_id']);
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
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[StaffCutiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffCutiXts()
    {
        return $this->hasMany(StaffCutiXt::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[StaffDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffDets()
    {
        return $this->hasMany(StaffDet::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[SubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits()
    {
        return $this->hasMany(SubUnit::className(), ['primary_doctor_id' => 'staff_id']);
    }

    /**
     * Gets query for [[SubUnits0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits0()
    {
        return $this->hasMany(SubUnit::className(), ['secondary_doctor_id' => 'staff_id']);
    }

    /**
     * Gets query for [[SubUnitStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnitStaff()
    {
        return $this->hasMany(SubUnitStaff::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[Surgeries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgeries()
    {
        return $this->hasMany(Surgery::className(), ['staff_ahli_bedah' => 'staff_id']);
    }

    /**
     * Gets query for [[Surgeries0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgeries0()
    {
        return $this->hasMany(Surgery::className(), ['staff_ahli_anastesi' => 'staff_id']);
    }

    /**
     * Gets query for [[Surgeries1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgeries1()
    {
        return $this->hasMany(Surgery::className(), ['staff_asisten' => 'staff_id']);
    }
}
