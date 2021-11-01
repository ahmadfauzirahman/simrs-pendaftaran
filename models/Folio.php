<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio".
 *
 * @property int $folio_id
 * @property string|null $folio_no
 * @property string|null $folio_date
 * @property int|null $registration_id
 * @property int|null $dept_id
 * @property int|null $unit_id
 * @property int|null $sub_unit_id
 * @property string|null $service_date
 * @property string|null $service_time
 * @property float|null $amount
 * @property float|null $amount_pmt
 * @property float|null $owing_self
 * @property float|null $self_amount
 * @property float|null $owing_pay_by
 * @property float|null $items_net_amount
 * @property float|null $disc_pc
 * @property float|null $pay_by_amount
 * @property float|null $disc_amount
 * @property int|null $cos_service_id
 * @property int|null $cos_requested_id
 * @property int|null $cos_pay_id
 * @property int|null $folio_status
 * @property int|null $parent_folio_id
 * @property int|null $medical_status
 * @property string|null $anamnesa
 * @property string|null $anamnesa_pic
 * @property string|null $prognosa
 * @property string|null $allergy
 * @property string|null $degenerative
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $diagnose
 * @property string|null $procedure_memo
 * @property int|null $pay_by_id
 * @property int|null $tax1_id
 * @property int|null $tax2_id
 * @property float|null $tax1_rate
 * @property float|null $tax2_rate
 * @property float|null $tax1_amount
 * @property float|null $tax2_amount
 * @property int|null $show_all_units
 * @property int|null $primary_doctor_id
 * @property int|null $secondary_doctor_id
 * @property string|null $end_service_date
 * @property string|null $end_service_time
 * @property string|null $view_from_date
 * @property int|null $show_available_day_only
 * @property int|null $view_day_week_month
 * @property int|null $overflow
 * @property string|null $cancellation_reason
 * @property int|null $refer_folio_id
 * @property string|null $physical_exam
 * @property string|null $other_exam_notes
 * @property string|null $q_number
 * @property int|null $validated
 * @property int|null $main_folio_id
 * @property int|null $bpjs_print_no
 * @property int|null $referral_print_no
 *
 * @property BillingPmtFolio[] $billingPmtFolios
 * @property BillingPmt[] $billPmts
 * @property ScrtUser $modifiedUser
 * @property Folio $parentFolio
 * @property Folio[] $folios
 * @property ScrtUser $createdUser
 * @property Registration $registration
 * @property Staff $primaryDoctor
 * @property Staff $secondaryDoctor
 * @property Tax $tax1
 * @property Tax $tax2
 * @property Folio $referFolio
 * @property Folio[] $folios0
 * @property Department $dept
 * @property Unit $unit
 * @property SubUnit $subUnit
 * @property Cos $cosService
 * @property Cos $cosRequested
 * @property Cos $cosPay
 * @property FolioAnam[] $folioAnams
 * @property FolioAtt[] $folioAtts
 * @property FolioCosChange[] $folioCosChanges
 * @property FolioDiag[] $folioDiags
 * @property FolioDiet[] $folioDiets
 * @property FolioFarmasiDiagExt $folioFarmasiDiagExt
 * @property FolioItem[] $folioItems
 * @property FolioItemAuto[] $folioItemAutos
 * @property FolioItemMtl[] $folioItemMtls
 * @property FolioItemRes[] $folioItemRes
 * @property FolioMedStatus[] $folioMedStatuses
 * @property FolioPhysicalExam[] $folioPhysicalExams
 * @property FolioProc[] $folioProcs
 * @property FolioStaff[] $folioStaff
 * @property FolioStaffHistory[] $folioStaffHistories
 * @property FolioTherapyItem[] $folioTherapyItems
 * @property FolioTherapyMtl[] $folioTherapyMtls
 * @property FolioTherapyRes[] $folioTherapyRes
 * @property FolioVerifikatorLabXt $folioVerifikatorLabXt
 * @property FormControlXt[] $formControlXts
 * @property GlJfoDet[] $glJfoDets
 * @property McuDetExt[] $mcuDetExts
 * @property NurseCareNotes[] $nurseCareNotes
 * @property NurseCareVsign[] $nurseCareVsigns
 * @property QTrans[] $qTrans
 * @property RadiologiFilmXt[] $radiologiFilmXts
 * @property ResponeTimePoliXt $responeTimePoliXt
 * @property XapprovalObillXt[] $xapprovalObillXts
 */
class Folio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id'], 'required'],
            [['folio_id', 'registration_id', 'dept_id', 'unit_id', 'sub_unit_id', 'cos_service_id', 'cos_requested_id', 'cos_pay_id', 'folio_status', 'parent_folio_id', 'medical_status', 'created_user_id', 'modified_user_id', 'pay_by_id', 'tax1_id', 'tax2_id', 'show_all_units', 'primary_doctor_id', 'secondary_doctor_id', 'show_available_day_only', 'view_day_week_month', 'overflow', 'refer_folio_id', 'validated', 'main_folio_id', 'bpjs_print_no', 'referral_print_no'], 'integer'],
            [['folio_date', 'service_date', 'service_time', 'created_time', 'modified_time', 'end_service_date', 'end_service_time', 'view_from_date'], 'safe'],
            [['amount', 'amount_pmt', 'owing_self', 'self_amount', 'owing_pay_by', 'items_net_amount', 'disc_pc', 'pay_by_amount', 'disc_amount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount'], 'number'],
            [['anamnesa', 'anamnesa_pic', 'prognosa', 'allergy', 'degenerative', 'notes', 'diagnose', 'procedure_memo', 'physical_exam', 'other_exam_notes'], 'string'],
            [['folio_no'], 'string', 'max' => 20],
            [['cancellation_reason'], 'string', 'max' => 50],
            [['q_number'], 'string', 'max' => 10],
            [['folio_id'], 'unique'],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['parent_folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['parent_folio_id' => 'folio_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['registration_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['registration_id' => 'registration_id']],
            [['primary_doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['primary_doctor_id' => 'staff_id']],
            [['secondary_doctor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['secondary_doctor_id' => 'staff_id']],
            [['tax1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax1_id' => 'tax_id']],
            [['tax2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tax::className(), 'targetAttribute' => ['tax2_id' => 'tax_id']],
            [['refer_folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['refer_folio_id' => 'folio_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
            [['cos_service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_service_id' => 'cos_id']],
            [['cos_requested_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_requested_id' => 'cos_id']],
            [['cos_pay_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_pay_id' => 'cos_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'folio_no' => 'Folio No',
            'folio_date' => 'Folio Date',
            'registration_id' => 'Registration ID',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
            'service_date' => 'Service Date',
            'service_time' => 'Service Time',
            'amount' => 'Amount',
            'amount_pmt' => 'Amount Pmt',
            'owing_self' => 'Owing Self',
            'self_amount' => 'Self Amount',
            'owing_pay_by' => 'Owing Pay By',
            'items_net_amount' => 'Items Net Amount',
            'disc_pc' => 'Disc Pc',
            'pay_by_amount' => 'Pay By Amount',
            'disc_amount' => 'Disc Amount',
            'cos_service_id' => 'Cos Service ID',
            'cos_requested_id' => 'Cos Requested ID',
            'cos_pay_id' => 'Cos Pay ID',
            'folio_status' => 'Folio Status',
            'parent_folio_id' => 'Parent Folio ID',
            'medical_status' => 'Medical Status',
            'anamnesa' => 'Anamnesa',
            'anamnesa_pic' => 'Anamnesa Pic',
            'prognosa' => 'Prognosa',
            'allergy' => 'Allergy',
            'degenerative' => 'Degenerative',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'diagnose' => 'Diagnose',
            'procedure_memo' => 'Procedure Memo',
            'pay_by_id' => 'Pay By ID',
            'tax1_id' => 'Tax1 ID',
            'tax2_id' => 'Tax2 ID',
            'tax1_rate' => 'Tax1 Rate',
            'tax2_rate' => 'Tax2 Rate',
            'tax1_amount' => 'Tax1 Amount',
            'tax2_amount' => 'Tax2 Amount',
            'show_all_units' => 'Show All Units',
            'primary_doctor_id' => 'Primary Doctor ID',
            'secondary_doctor_id' => 'Secondary Doctor ID',
            'end_service_date' => 'End Service Date',
            'end_service_time' => 'End Service Time',
            'view_from_date' => 'View From Date',
            'show_available_day_only' => 'Show Available Day Only',
            'view_day_week_month' => 'View Day Week Month',
            'overflow' => 'Overflow',
            'cancellation_reason' => 'Cancellation Reason',
            'refer_folio_id' => 'Refer Folio ID',
            'physical_exam' => 'Physical Exam',
            'other_exam_notes' => 'Other Exam Notes',
            'q_number' => 'Q Number',
            'validated' => 'Validated',
            'main_folio_id' => 'Main Folio ID',
            'bpjs_print_no' => 'Bpjs Print No',
            'referral_print_no' => 'Referral Print No',
        ];
    }

    /**
     * Gets query for [[BillingPmtFolios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtFolios()
    {
        return $this->hasMany(BillingPmtFolio::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[BillPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillPmts()
    {
        return $this->hasMany(BillingPmt::className(), ['bill_pmt_id' => 'bill_pmt_id'])->viaTable('billing_pmt_folio', ['folio_id' => 'folio_id']);
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
     * Gets query for [[ParentFolio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'parent_folio_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['parent_folio_id' => 'folio_id']);
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
     * Gets query for [[Registration]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistration()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'registration_id']);
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
     * Gets query for [[ReferFolio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'refer_folio_id']);
    }

    /**
     * Gets query for [[Folios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios0()
    {
        return $this->hasMany(Folio::className(), ['refer_folio_id' => 'folio_id']);
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
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[SubUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnit()
    {
        return $this->hasOne(SubUnit::className(), ['sub_unit_id' => 'sub_unit_id']);
    }

    /**
     * Gets query for [[CosService]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosService()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_service_id']);
    }

    /**
     * Gets query for [[CosRequested]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosRequested()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_requested_id']);
    }

    /**
     * Gets query for [[CosPay]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosPay()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_pay_id']);
    }

    /**
     * Gets query for [[FolioAnams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioAnams()
    {
        return $this->hasMany(FolioAnam::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioAtts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioAtts()
    {
        return $this->hasMany(FolioAtt::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioCosChanges]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioCosChanges()
    {
        return $this->hasMany(FolioCosChange::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioDiags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioDiags()
    {
        return $this->hasMany(FolioDiag::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioDiets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioDiets()
    {
        return $this->hasMany(FolioDiet::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioFarmasiDiagExt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioFarmasiDiagExt()
    {
        return $this->hasOne(FolioFarmasiDiagExt::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItems()
    {
        return $this->hasMany(FolioItem::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioItemAutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemAutos()
    {
        return $this->hasMany(FolioItemAuto::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioItemMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemMtls()
    {
        return $this->hasMany(FolioItemMtl::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioItemRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemRes()
    {
        return $this->hasMany(FolioItemRes::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioMedStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioMedStatuses()
    {
        return $this->hasMany(FolioMedStatus::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioPhysicalExams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioPhysicalExams()
    {
        return $this->hasMany(FolioPhysicalExam::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioProcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioProcs()
    {
        return $this->hasMany(FolioProc::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioStaff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioStaff()
    {
        return $this->hasMany(FolioStaff::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioStaffHistories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioStaffHistories()
    {
        return $this->hasMany(FolioStaffHistory::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioTherapyItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyItems()
    {
        return $this->hasMany(FolioTherapyItem::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioTherapyMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyMtls()
    {
        return $this->hasMany(FolioTherapyMtl::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioTherapyRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyRes()
    {
        return $this->hasMany(FolioTherapyRes::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FolioVerifikatorLabXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioVerifikatorLabXt()
    {
        return $this->hasOne(FolioVerifikatorLabXt::className(), ['fol_id' => 'folio_id']);
    }

    /**
     * Gets query for [[FormControlXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormControlXts()
    {
        return $this->hasMany(FormControlXt::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[McuDetExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuDetExts()
    {
        return $this->hasMany(McuDetExt::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[NurseCareNotes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNurseCareNotes()
    {
        return $this->hasMany(NurseCareNotes::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[NurseCareVsigns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNurseCareVsigns()
    {
        return $this->hasMany(NurseCareVsign::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[QTrans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getQTrans()
    {
        return $this->hasMany(QTrans::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[RadiologiFilmXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRadiologiFilmXts()
    {
        return $this->hasMany(RadiologiFilmXt::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[ResponeTimePoliXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponeTimePoliXt()
    {
        return $this->hasOne(ResponeTimePoliXt::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[XapprovalObillXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getXapprovalObillXts()
    {
        return $this->hasMany(XapprovalObillXt::className(), ['folio_id' => 'folio_id']);
    }
}
