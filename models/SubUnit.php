<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_unit".
 *
 * @property int $sub_unit_id
 * @property int|null $update_status
 * @property int|null $duration
 * @property int|null $unlimited_time
 * @property int|null $unit_id
 * @property string|null $sub_unit_name
 * @property string|null $queue_prefix
 * @property string|null $floor_location
 * @property string|null $person_in_charge
 * @property int|null $location_id
 * @property string|null $phone
 * @property int|null $status
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $notes
 * @property int|null $patient_limit
 * @property int|null $total_patient_limit
 * @property int|null $max_patient_limit
 * @property int|null $overflow_slot
 * @property int|null $reservation_slot
 * @property resource|null $small_icon
 * @property resource|null $large_icon
 * @property int|null $warehouse_id
 * @property int|null $primary_doctor_id
 * @property int|null $secondary_doctor_id
 * @property int|null $refer_pharmacy
 * @property int|null $refer_other_exam
 * @property int|null $disabled
 * @property int|null $sex
 * @property int|null $lims_intf
 * @property string|null $unavailable_from
 * @property string|null $unavailable_to
 * @property string|null $unavailable_message
 * @property string|null $refer_sub_unit_code
 * @property int|null $n_day_rsvp_start
 * @property int|null $n_day_rsvp
 * @property int|null $rsvp_got_q_number
 * @property string|null $rsvp_start
 * @property string|null $rsvp_end
 * @property int|null $q_start
 * @property int|null $use_web_reservation
 * @property string|null $sub_unit_unavailable_url
 * @property string|null $sip_no
 * @property int|null $use_arm_reservation
 * @property string|null $status_id
 * @property int|null $reg_id
 * @property string|null $sensus_date
 * @property string|null $time
 * @property string|null $patient_booking
 * @property string|null $description
 * @property int|null $renpul
 * @property string|null $desc_ruangan
 * @property int|null $q_no
 * @property string|null $q_date
 * @property int|null $q_play
 * @property int|null $q_view
 * @property int|null $q_mark
 *
 * @property CosDept[] $cosDepts
 * @property DeptItem[] $deptItems
 * @property Folio[] $folios
 * @property HkSubUnit[] $hkSubUnits
 * @property QServerDet[] $qServerDets
 * @property SubModule[] $subModules
 * @property Location $location
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Warehouse $warehouse
 * @property Staff $primaryDoctor
 * @property Staff $secondaryDoctor
 * @property Unit $unit
 * @property Registration $reg
 * @property SubUnitStaff[] $subUnitStaff
 * @property SubUnitTime[] $subUnitTimes
 * @property SubUnitTimeByDate[] $subUnitTimeByDates
 */
class SubUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id'], 'required'],
            [['sub_unit_id', 'update_status', 'duration', 'unlimited_time', 'unit_id', 'location_id', 'status', 'created_user_id', 'modified_user_id', 'patient_limit', 'total_patient_limit', 'max_patient_limit', 'overflow_slot', 'reservation_slot', 'warehouse_id', 'primary_doctor_id', 'secondary_doctor_id', 'refer_pharmacy', 'refer_other_exam', 'disabled', 'sex', 'lims_intf', 'n_day_rsvp_start', 'n_day_rsvp', 'rsvp_got_q_number', 'q_start', 'use_web_reservation', 'use_arm_reservation', 'reg_id', 'renpul', 'q_no', 'q_play', 'q_view', 'q_mark'], 'integer'],
            [['created_time', 'modified_time', 'unavailable_from', 'unavailable_to', 'rsvp_start', 'rsvp_end', 'sensus_date', 'time', 'q_date'], 'safe'],
            [['notes', 'small_icon', 'large_icon'], 'string'],
            [['sub_unit_name', 'person_in_charge', 'refer_sub_unit_code', 'sub_unit_unavailable_url', 'sip_no'], 'string', 'max' => 50],
            [['queue_prefix'], 'string', 'max' => 5],
            [['floor_location', 'status_id'], 'string', 'max' => 2],
            [['phone'], 'string', 'max' => 30],
            [['unavailable_message'], 'string', 'max' => 150],
            [['patient_booking'], 'string', 'max' => 100],
            [['description', 'desc_ruangan'], 'string', 'max' => 200],
            [['sub_unit_id'], 'unique'],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'location_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['primary_doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['primary_doctor_id' => 'staff_id']],
            [['secondary_doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['secondary_doctor_id' => 'staff_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_unit_id' => 'Sub Unit ID',
            'update_status' => 'Update Status',
            'duration' => 'Duration',
            'unlimited_time' => 'Unlimited Time',
            'unit_id' => 'Unit ID',
            'sub_unit_name' => 'Sub Unit Name',
            'queue_prefix' => 'Queue Prefix',
            'floor_location' => 'Floor Location',
            'person_in_charge' => 'Person In Charge',
            'location_id' => 'Location ID',
            'phone' => 'Phone',
            'status' => 'Status',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'notes' => 'Notes',
            'patient_limit' => 'Patient Limit',
            'total_patient_limit' => 'Total Patient Limit',
            'max_patient_limit' => 'Max Patient Limit',
            'overflow_slot' => 'Overflow Slot',
            'reservation_slot' => 'Reservation Slot',
            'small_icon' => 'Small Icon',
            'large_icon' => 'Large Icon',
            'warehouse_id' => 'Warehouse ID',
            'primary_doctor_id' => 'Primary Doctor ID',
            'secondary_doctor_id' => 'Secondary Doctor ID',
            'refer_pharmacy' => 'Refer Pharmacy',
            'refer_other_exam' => 'Refer Other Exam',
            'disabled' => 'Disabled',
            'sex' => 'Sex',
            'lims_intf' => 'Lims Intf',
            'unavailable_from' => 'Unavailable From',
            'unavailable_to' => 'Unavailable To',
            'unavailable_message' => 'Unavailable Message',
            'refer_sub_unit_code' => 'Refer Sub Unit Code',
            'n_day_rsvp_start' => 'N Day Rsvp Start',
            'n_day_rsvp' => 'N Day Rsvp',
            'rsvp_got_q_number' => 'Rsvp Got Q Number',
            'rsvp_start' => 'Rsvp Start',
            'rsvp_end' => 'Rsvp End',
            'q_start' => 'Q Start',
            'use_web_reservation' => 'Use Web Reservation',
            'sub_unit_unavailable_url' => 'Sub Unit Unavailable Url',
            'sip_no' => 'Sip No',
            'use_arm_reservation' => 'Use Arm Reservation',
            'status_id' => 'Status ID',
            'reg_id' => 'Reg ID',
            'sensus_date' => 'Sensus Date',
            'time' => 'Time',
            'patient_booking' => 'Patient Booking',
            'description' => 'Description',
            'renpul' => 'Renpul',
            'desc_ruangan' => 'Desc Ruangan',
            'q_no' => 'Q No',
            'q_date' => 'Q Date',
            'q_play' => 'Q Play',
            'q_view' => 'Q View',
            'q_mark' => 'Q Mark',
        ];
    }

    /**
     * Gets query for [[CosDepts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosDepts()
    {
        return $this->hasMany(CosDept::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[DeptItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems()
    {
        return $this->hasMany(DeptItem::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[HkSubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHkSubUnits()
    {
        return $this->hasMany(HkSubUnit::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[QServerDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQServerDets()
    {
        return $this->hasMany(QServerDet::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[SubModules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubModules()
    {
        return $this->hasMany(SubModule::className(), ['sub_unit_id' => 'sub_unit_id']);
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
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[PrimaryDoctor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrimaryDoctor()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'primary_doctor_id']);
    }

    /**
     * Gets query for [[SecondaryDoctor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSecondaryDoctor()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'secondary_doctor_id']);
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }

    /**
     * Gets query for [[SubUnitStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnitStaff()
    {
        return $this->hasMany(SubUnitStaff::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[SubUnitTimes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnitTimes()
    {
        return $this->hasMany(SubUnitTime::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[SubUnitTimeByDates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnitTimeByDates()
    {
        return $this->hasMany(SubUnitTimeByDate::className(), ['sub_unit_id' => 'sub_unit_id']);
    }
}
