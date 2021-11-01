<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit".
 *
 * @property int $unit_id
 * @property int|null $dept_id
 * @property string|null $unit_name
 * @property string|null $sub_unit_caption
 * @property string|null $person_in_charge
 * @property string|null $status_available
 * @property string|null $status_used
 * @property string|null $status_housekeep
 * @property string|null $status_maintenance
 * @property int|null $sub_unit_availability
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property resource|null $small_icon
 * @property resource|null $large_icon
 * @property int|null $tax1_id
 * @property int|null $tax2_id
 * @property string|null $description
 * @property int|null $med_status_open
 * @property int|null $med_status_close
 * @property int|null $patient_ar_gl_acc_id
 * @property int|null $order_entry_after_reg
 * @property int|null $readonly_order_entry
 * @property int|null $gl_jtype_id
 * @property int|null $undetermined_end_servicedate
 * @property string|null $refer_unit_code
 * @property int|null $use_web_reservation
 * @property int|null $q_no
 * @property string|null $q_date
 * @property int|null $q_play
 * @property int|null $q_view
 * @property int|null $sex
 * @property int|null $q_mark
 *
 * @property CosDept[] $cosDepts
 * @property DeptItem[] $deptItems
 * @property Folio[] $folios
 * @property FormControlXt[] $formControlXts
 * @property PayByDept[] $payByDepts
 * @property SubModule[] $subModules
 * @property SubUnit[] $subUnits
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Tax $tax1
 * @property Tax $tax2
 * @property GlAccount $patientArGlAcc
 * @property GlJournalType $glJtype
 * @property Department $dept
 * @property UnitMedStatus[] $unitMedStatuses
 * @property UnitPhysicExam[] $unitPhysicExams
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id', 'sub_unit_availability', 'created_user_id', 'modified_user_id', 'tax1_id', 'tax2_id', 'med_status_open', 'med_status_close', 'patient_ar_gl_acc_id', 'order_entry_after_reg', 'readonly_order_entry', 'gl_jtype_id', 'undetermined_end_servicedate', 'use_web_reservation', 'q_no', 'q_play', 'q_view', 'sex', 'q_mark'], 'integer'],
            [['created_time', 'modified_time', 'q_date'], 'safe'],
            [['small_icon', 'large_icon', 'description'], 'string'],
            [['unit_name', 'person_in_charge', 'refer_unit_code'], 'string', 'max' => 50],
            [['sub_unit_caption', 'status_available', 'status_used', 'status_housekeep', 'status_maintenance'], 'string', 'max' => 20],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
            [['patient_ar_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['patient_ar_gl_acc_id' => 'account_id']],
            [['gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['gl_jtype_id' => 'journal_type_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unit_id' => 'Unit ID',
            'dept_id' => 'Dept ID',
            'unit_name' => 'Unit Name',
            'sub_unit_caption' => 'Sub Unit Caption',
            'person_in_charge' => 'Person In Charge',
            'status_available' => 'Status Available',
            'status_used' => 'Status Used',
            'status_housekeep' => 'Status Housekeep',
            'status_maintenance' => 'Status Maintenance',
            'sub_unit_availability' => 'Sub Unit Availability',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'small_icon' => 'Small Icon',
            'large_icon' => 'Large Icon',
            'tax1_id' => 'Tax1 ID',
            'tax2_id' => 'Tax2 ID',
            'description' => 'Description',
            'med_status_open' => 'Med Status Open',
            'med_status_close' => 'Med Status Close',
            'patient_ar_gl_acc_id' => 'Patient Ar Gl Acc ID',
            'order_entry_after_reg' => 'Order Entry After Reg',
            'readonly_order_entry' => 'Readonly Order Entry',
            'gl_jtype_id' => 'Gl Jtype ID',
            'undetermined_end_servicedate' => 'Undetermined End Servicedate',
            'refer_unit_code' => 'Refer Unit Code',
            'use_web_reservation' => 'Use Web Reservation',
            'q_no' => 'Q No',
            'q_date' => 'Q Date',
            'q_play' => 'Q Play',
            'q_view' => 'Q View',
            'sex' => 'Sex',
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
        return $this->hasMany(CosDept::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[DeptItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems()
    {
        return $this->hasMany(DeptItem::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[FormControlXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormControlXts()
    {
        return $this->hasMany(FormControlXt::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[PayByDepts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByDepts()
    {
        return $this->hasMany(PayByDept::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[SubModules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubModules()
    {
        return $this->hasMany(SubModule::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[SubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits()
    {
        return $this->hasMany(SubUnit::className(), ['unit_id' => 'unit_id']);
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
     * Gets query for [[Tax1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTax1()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'tax1_id']);
    }

    /**
     * Gets query for [[Tax2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTax2()
    {
        return $this->hasOne(Tax::className(), ['tax_id' => 'tax2_id']);
    }

    /**
     * Gets query for [[PatientArGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientArGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'patient_ar_gl_acc_id']);
    }

    /**
     * Gets query for [[GlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'gl_jtype_id']);
    }

    /**
     * Gets query for [[Dept]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[UnitMedStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnitMedStatuses()
    {
        return $this->hasMany(UnitMedStatus::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[UnitPhysicExams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnitPhysicExams()
    {
        return $this->hasMany(UnitPhysicExam::className(), ['unit_id' => 'unit_id']);
    }
}
