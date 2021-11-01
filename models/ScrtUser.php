<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_user".
 *
 * @property int $user_id
 * @property string|null $user_name
 * @property string|null $password
 * @property string|null $full_name
 * @property int|null $disable_change_pwd
 * @property int|null $change_pwd_on_login
 * @property int|null $access_expiry_option
 * @property string|null $access_expiry_date
 * @property string|null $notes
 * @property string|null $job_title
 * @property string|null $department
 * @property int|null $group_id
 * @property int|null $policy_id
 * @property int|null $active
 * @property int|null $built_in
 * @property int|null $q_server_id
 * @property int|null $login_show_alerts
 * @property string|null $email
 * @property int|null $opening_module_id
 * @property resource|null $user_signature
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ActivityMntnc[] $activityMntncs
 * @property ActivityMntnc[] $activityMntncs0
 * @property ApInv[] $apInvs
 * @property ApInv[] $apInvs0
 * @property ApInvBind[] $apInvBinds
 * @property ApInvBind[] $apInvBinds0
 * @property ApPmt[] $apPmts
 * @property ApPmt[] $apPmts0
 * @property ApSetup[] $apSetups
 * @property ApSetup[] $apSetups0
 * @property ArInv[] $arInvs
 * @property ArInv[] $arInvs0
 * @property ArInv[] $arInvs1
 * @property ArInvBind[] $arInvBinds
 * @property ArInvBind[] $arInvBinds0
 * @property ArPmt[] $arPmts
 * @property ArPmt[] $arPmts0
 * @property ArSetup[] $arSetups
 * @property ArSetup[] $arSetups0
 * @property Asset[] $assets
 * @property Asset[] $assets0
 * @property AssetGroup[] $assetGroups
 * @property AssetGroup[] $assetGroups0
 * @property AssetMv[] $assetMvs
 * @property AssetMv[] $assetMvs0
 * @property AssetSetup[] $assetSetups
 * @property AssetSetup[] $assetSetups0
 * @property AssetType[] $assetTypes
 * @property AssetType[] $assetTypes0
 * @property Bank[] $banks
 * @property Bank[] $banks0
 * @property BankJournal[] $bankJournals
 * @property BankJournal[] $bankJournals0
 * @property BankSetup[] $bankSetups
 * @property BankSetup[] $bankSetups0
 * @property BillingPmt[] $billingPmts
 * @property BillingPmt[] $billingPmts0
 * @property BillingPmtAr[] $billingPmtArs
 * @property BloodType[] $bloodTypes
 * @property BloodType[] $bloodTypes0
 * @property Carrier[] $carriers
 * @property Carrier[] $carriers0
 * @property City[] $cities
 * @property City[] $cities0
 * @property Company[] $companies
 * @property Company[] $companies0
 * @property CompleteFileExt[] $completeFileExts
 * @property CompleteFileHdXt[] $completeFileHdXts
 * @property Cos[] $cos
 * @property Cos[] $cos0
 * @property CosItem[] $cosItems
 * @property CosItem[] $cosItems0
 * @property Country[] $countries
 * @property Country[] $countries0
 * @property CurHisExchg[] $curHisExchgs
 * @property CurHisTax[] $curHisTaxes
 * @property Currency[] $currencies
 * @property Currency[] $currencies0
 * @property CusGroup[] $cusGroups
 * @property CusGroup[] $cusGroups0
 * @property Customer[] $customers
 * @property Customer[] $customers0
 * @property Department[] $departments
 * @property Department[] $departments0
 * @property DeptItem[] $deptItems
 * @property DeptItem[] $deptItems0
 * @property DeptUser[] $deptUsers
 * @property DiagOpExt[] $diagOpExts
 * @property DiagOpExt[] $diagOpExts0
 * @property Diet[] $diets
 * @property Diet[] $diets0
 * @property District[] $districts
 * @property District[] $districts0
 * @property DownPayment[] $downPayments
 * @property DownPayment[] $downPayments0
 * @property Education[] $educations
 * @property Education[] $educations0
 * @property Ethnicity[] $ethnicities
 * @property Ethnicity[] $ethnicities0
 * @property EventLogExt[] $eventLogExts
 * @property Exam[] $exams
 * @property Exam[] $exams0
 * @property FeeAmbulance[] $feeAmbulances
 * @property FeeAmbulance[] $feeAmbulances0
 * @property FiscalSetup[] $fiscalSetups
 * @property FiscalSetup[] $fiscalSetups0
 * @property Folio[] $folios
 * @property Folio[] $folios0
 * @property FolioCosChange[] $folioCosChanges
 * @property FolioExamValidate[] $folioExamValidates
 * @property FolioItem[] $folioItems
 * @property FolioItem[] $folioItems0
 * @property FolioItemAuto[] $folioItemAutos
 * @property FolioItemAuto[] $folioItemAutos0
 * @property FolioMedStatus[] $folioMedStatuses
 * @property FolioMedStatus[] $folioMedStatuses0
 * @property FolioTherapyItem[] $folioTherapyItems
 * @property FolioTherapyItem[] $folioTherapyItems0
 * @property FolioViewHasilXt[] $folioViewHasilXts
 * @property FormControlXt[] $formControlXts
 * @property FormControlXt[] $formControlXts0
 * @property GlAccount[] $glAccounts
 * @property GlAccount[] $glAccounts0
 * @property GlBudget[] $glBudgets
 * @property GlBudget[] $glBudgets0
 * @property GlJournal[] $glJournals
 * @property GlJournal[] $glJournals0
 * @property GlJournalType[] $glJournalTypes
 * @property GlJournalType[] $glJournalTypes0
 * @property GlJschedule[] $glJschedules
 * @property GlJschedule[] $glJschedules0
 * @property GlJtemplate[] $glJtemplates
 * @property GlJtemplate[] $glJtemplates0
 * @property GlSetup[] $glSetups
 * @property GlSetup[] $glSetups0
 * @property HkSubUnit[] $hkSubUnits
 * @property Icd[] $icds
 * @property Icd[] $icds0
 * @property IcdProc[] $icdProcs
 * @property IcdProc[] $icdProcs0
 * @property InvAdj[] $invAdjs
 * @property InvAdj[] $invAdjs0
 * @property InvAdjAccount[] $invAdjAccounts
 * @property InvAdjAccount[] $invAdjAccounts0
 * @property InvCount[] $invCounts
 * @property InvCount[] $invCounts0
 * @property InvSetup[] $invSetups
 * @property InvSetup[] $invSetups0
 * @property InvTransfer[] $invTransfers
 * @property InvTransfer[] $invTransfers0
 * @property Item[] $items
 * @property Item[] $items0
 * @property ItemGroup[] $itemGroups
 * @property ItemGroup[] $itemGroups0
 * @property ItemMcuExt[] $itemMcuExts
 * @property ItemMcuExt[] $itemMcuExts0
 * @property ItemType[] $itemTypes
 * @property ItemType[] $itemTypes0
 * @property LaborLuarXt[] $laborLuarXts
 * @property Location[] $locations
 * @property Location[] $locations0
 * @property MaritalStatus[] $maritalStatuses
 * @property MaritalStatus[] $maritalStatuses0
 * @property MarketingCardExt[] $marketingCardExts
 * @property MarketingVisite[] $marketingVisites
 * @property MarketingVisite[] $marketingVisites0
 * @property McuExt[] $mcuExts
 * @property McuExt[] $mcuExts0
 * @property MedStatus[] $medStatuses
 * @property MedStatus[] $medStatuses0
 * @property MfgSetup[] $mfgSetups
 * @property MfgSetup[] $mfgSetups0
 * @property Morder[] $morders
 * @property Morder[] $morders0
 * @property Mreceipt[] $mreceipts
 * @property Mreceipt[] $mreceipts0
 * @property NInvAdj[] $nInvAdjs
 * @property NInvAdj[] $nInvAdjs0
 * @property NInvAdjAccount[] $nInvAdjAccounts
 * @property NInvAdjAccount[] $nInvAdjAccounts0
 * @property NInvCount[] $nInvCounts
 * @property NInvCount[] $nInvCounts0
 * @property NInvSetup[] $nInvSetups
 * @property NInvSetup[] $nInvSetups0
 * @property NInvTransfer[] $nInvTransfers
 * @property NInvTransfer[] $nInvTransfers0
 * @property NItem[] $nItems
 * @property NItem[] $nItems0
 * @property NItemGroup[] $nItemGroups
 * @property NItemGroup[] $nItemGroups0
 * @property NItemType[] $nItemTypes
 * @property NItemType[] $nItemTypes0
 * @property NPorder[] $nPorders
 * @property NPorder[] $nPorders0
 * @property NPreceipt[] $nPreceipts
 * @property NPreceipt[] $nPreceipts0
 * @property NPurchaseSetup[] $nPurchaseSetups
 * @property NPurchaseSetup[] $nPurchaseSetups0
 * @property NUom[] $nUoms
 * @property NUom[] $nUoms0
 * @property NWarehouse[] $nWarehouses
 * @property NWarehouse[] $nWarehouses0
 * @property Nationality[] $nationalities
 * @property Nationality[] $nationalities0
 * @property NurseCareNotes[] $nurseCareNotes
 * @property NurseCareVsign[] $nurseCareVsigns
 * @property Occupation[] $occupations
 * @property Occupation[] $occupations0
 * @property OccupationXt[] $occupationXts
 * @property OccupationXt[] $occupationXts0
 * @property OkupasiFileXt[] $okupasiFileXts
 * @property OkupasiFileXt[] $okupasiFileXts0
 * @property OkupasiPatientXt[] $okupasiPatientXts
 * @property OkupasiPatientXt[] $okupasiPatientXts0
 * @property OkupasiPayByXt[] $okupasiPayByXts
 * @property OkupasiPhotoXt[] $okupasiPhotoXts
 * @property OkupasiXt[] $okupasiXts
 * @property OkupasiXt[] $okupasiXts0
 * @property Patient[] $patients
 * @property Patient[] $patients0
 * @property PatientGroup[] $patientGroups
 * @property PatientGroup[] $patientGroups0
 * @property PatientType[] $patientTypes
 * @property PatientType[] $patientTypes0
 * @property PayBy[] $payBies
 * @property PayBy[] $payBies0
 * @property PayByItemPriceMcuExt[] $payByItemPriceMcuExts
 * @property Payment[] $payments
 * @property Payment[] $payments0
 * @property PersonalRelation[] $personalRelations
 * @property PersonalRelation[] $personalRelations0
 * @property PhoneExt[] $phoneExts
 * @property PhoneExt[] $phoneExts0
 * @property PicPay[] $picPays
 * @property Porder[] $porders
 * @property Porder[] $porders0
 * @property Preceipt[] $preceipts
 * @property Preceipt[] $preceipts0
 * @property Province[] $provinces
 * @property Province[] $provinces0
 * @property PurchaseSetup[] $purchaseSetups
 * @property RadiologiFilmXt[] $radiologiFilmXts
 * @property RadiologiFilmXt[] $radiologiFilmXts0
 * @property ReferenceType[] $referenceTypes
 * @property ReferenceType[] $referenceTypes0
 * @property RegSetup[] $regSetups
 * @property RegSetup[] $regSetups0
 * @property Registration[] $registrations
 * @property Registration[] $registrations0
 * @property RegistrationFill[] $registrationFills
 * @property RegistrationFill[] $registrationFills0
 * @property Religion[] $religions
 * @property Religion[] $religions0
 * @property Report[] $reports
 * @property Report[] $reports0
 * @property ReportAccess[] $reportAccesses
 * @property Resource[] $resources
 * @property Resource[] $resources0
 * @property ResourceGroup[] $resourceGroups
 * @property ResourceGroup[] $resourceGroups0
 * @property ResourceType[] $resourceTypes
 * @property ResourceType[] $resourceTypes0
 * @property ResponeTimePoliXt[] $responeTimePoliXts
 * @property ResponeTimePoliXt[] $responeTimePoliXts0
 * @property SalesSetup[] $salesSetups
 * @property SalesSetup[] $salesSetups0
 * @property Salesman[] $salesmen
 * @property Salesman[] $salesmen0
 * @property Salutation[] $salutations
 * @property Salutation[] $salutations0
 * @property ScrtPolicy[] $scrtPolicies
 * @property ScrtPolicy[] $scrtPolicies0
 * @property ScrtPolicy $policy
 * @property ScrtGroup $group
 * @property ScrtPolicy $policy0
 * @property ScrtUser $createdUser
 * @property ScrtUser[] $scrtUsers
 * @property ScrtUser $modifiedUser
 * @property ScrtUser[] $scrtUsers0
 * @property ServiceExt[] $serviceExts
 * @property ServiceExt[] $serviceExts0
 * @property Sex[] $sexes
 * @property Sex[] $sexes0
 * @property Shipment[] $shipments
 * @property Shipment[] $shipments0
 * @property Sorder[] $sorders
 * @property Sorder[] $sorders0
 * @property Sorder[] $sorders1
 * @property Staff[] $staff
 * @property Staff[] $staff0
 * @property StaffCutiXt[] $staffCutiXts
 * @property StaffCutiXt[] $staffCutiXts0
 * @property StaffGroup[] $staffGroups
 * @property StaffGroup[] $staffGroups0
 * @property StaffStatusScheduleExt[] $staffStatusScheduleExts
 * @property StaffStatusScheduleExt[] $staffStatusScheduleExts0
 * @property StaffType[] $staffTypes
 * @property StaffType[] $staffTypes0
 * @property SubUnit[] $subUnits
 * @property SubUnit[] $subUnits0
 * @property Subdistrict[] $subdistricts
 * @property Subdistrict[] $subdistricts0
 * @property Supervisor[] $supervisors
 * @property Supervisor[] $supervisors0
 * @property ScrtUser[] $supervisors1
 * @property ScrtUser[] $users
 * @property Surgery[] $surgeries
 * @property Surgery[] $surgeries0
 * @property SystemParam[] $systemParams
 * @property Tax[] $taxes
 * @property Tax[] $taxes0
 * @property TermPayment[] $termPayments
 * @property TermPayment[] $termPayments0
 * @property TindakanOpExt[] $tindakanOpExts
 * @property TindakanOpExt[] $tindakanOpExts0
 * @property Unit[] $units
 * @property Unit[] $units0
 * @property Uom[] $uoms
 * @property Uom[] $uoms0
 * @property ValueEditFarmasiExt[] $valueEditFarmasiExts
 * @property ValueEditFarmasiExt[] $valueEditFarmasiExts0
 * @property VenGroup[] $venGroups
 * @property VenGroup[] $venGroups0
 * @property VenType[] $venTypes
 * @property VenType[] $venTypes0
 * @property Vendor[] $vendors
 * @property Vendor[] $vendors0
 * @property Village[] $villages
 * @property Village[] $villages0
 * @property Warehouse[] $warehouses
 * @property Warehouse[] $warehouses0
 * @property Zipcode[] $zipcodes
 * @property Zipcode[] $zipcodes0
 */
class ScrtUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disable_change_pwd', 'change_pwd_on_login', 'access_expiry_option', 'group_id', 'policy_id', 'active', 'built_in', 'q_server_id', 'login_show_alerts', 'opening_module_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['access_expiry_date', 'created_time', 'modified_time'], 'safe'],
            [['notes', 'user_signature'], 'string'],
            [['user_name', 'job_title', 'department'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 32],
            [['full_name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['user_name'], 'unique'],
            [['policy_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtPolicy::className(), 'targetAttribute' => ['policy_id' => 'policy_id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtGroup::className(), 'targetAttribute' => ['group_id' => 'group_id']],
            [['policy_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtPolicy::className(), 'targetAttribute' => ['policy_id' => 'policy_id']],
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
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'password' => 'Password',
            'full_name' => 'Full Name',
            'disable_change_pwd' => 'Disable Change Pwd',
            'change_pwd_on_login' => 'Change Pwd On Login',
            'access_expiry_option' => 'Access Expiry Option',
            'access_expiry_date' => 'Access Expiry Date',
            'notes' => 'Notes',
            'job_title' => 'Job Title',
            'department' => 'Department',
            'group_id' => 'Group ID',
            'policy_id' => 'Policy ID',
            'active' => 'Active',
            'built_in' => 'Built In',
            'q_server_id' => 'Q Server ID',
            'login_show_alerts' => 'Login Show Alerts',
            'email' => 'Email',
            'opening_module_id' => 'Opening Module ID',
            'user_signature' => 'User Signature',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ActivityMntncs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActivityMntncs()
    {
        return $this->hasMany(ActivityMntnc::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ActivityMntncs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActivityMntncs0()
    {
        return $this->hasMany(ActivityMntnc::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs()
    {
        return $this->hasMany(ApInv::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApInvs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs0()
    {
        return $this->hasMany(ApInv::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApInvBinds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvBinds()
    {
        return $this->hasMany(ApInvBind::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApInvBinds0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvBinds0()
    {
        return $this->hasMany(ApInvBind::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmts()
    {
        return $this->hasMany(ApPmt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApPmts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmts0()
    {
        return $this->hasMany(ApPmt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApSetups()
    {
        return $this->hasMany(ApSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ApSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApSetups0()
    {
        return $this->hasMany(ApSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['authorized_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArInvs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs0()
    {
        return $this->hasMany(ArInv::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArInvs1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs1()
    {
        return $this->hasMany(ArInv::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArInvBinds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvBinds()
    {
        return $this->hasMany(ArInvBind::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArInvBinds0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvBinds0()
    {
        return $this->hasMany(ArInvBind::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmts()
    {
        return $this->hasMany(ArPmt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArPmts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmts0()
    {
        return $this->hasMany(ArPmt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups()
    {
        return $this->hasMany(ArSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ArSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups0()
    {
        return $this->hasMany(ArSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Assets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets()
    {
        return $this->hasMany(Asset::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Assets0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets0()
    {
        return $this->hasMany(Asset::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetGroups()
    {
        return $this->hasMany(AssetGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetGroups0()
    {
        return $this->hasMany(AssetGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetMvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetMvs()
    {
        return $this->hasMany(AssetMv::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetMvs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetMvs0()
    {
        return $this->hasMany(AssetMv::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetSetups()
    {
        return $this->hasMany(AssetSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetSetups0()
    {
        return $this->hasMany(AssetSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes()
    {
        return $this->hasMany(AssetType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[AssetTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes0()
    {
        return $this->hasMany(AssetType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Banks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBanks()
    {
        return $this->hasMany(Bank::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Banks0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBanks0()
    {
        return $this->hasMany(Bank::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BankJournals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournals()
    {
        return $this->hasMany(BankJournal::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BankJournals0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournals0()
    {
        return $this->hasMany(BankJournal::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BankSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankSetups()
    {
        return $this->hasMany(BankSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BankSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankSetups0()
    {
        return $this->hasMany(BankSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BillingPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmts()
    {
        return $this->hasMany(BillingPmt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BillingPmts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmts0()
    {
        return $this->hasMany(BillingPmt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BillingPmtArs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtArs()
    {
        return $this->hasMany(BillingPmtAr::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BloodTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBloodTypes()
    {
        return $this->hasMany(BloodType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BloodTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBloodTypes0()
    {
        return $this->hasMany(BloodType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Carriers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarriers()
    {
        return $this->hasMany(Carrier::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Carriers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarriers0()
    {
        return $this->hasMany(Carrier::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Cities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Cities0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCities0()
    {
        return $this->hasMany(City::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Companies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Companies0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies0()
    {
        return $this->hasMany(Company::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CompleteFileExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompleteFileExts()
    {
        return $this->hasMany(CompleteFileExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CompleteFileHdXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompleteFileHdXts()
    {
        return $this->hasMany(CompleteFileHdXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Cos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos()
    {
        return $this->hasMany(Cos::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Cos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos0()
    {
        return $this->hasMany(Cos::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CosItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosItems()
    {
        return $this->hasMany(CosItem::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CosItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosItems0()
    {
        return $this->hasMany(CosItem::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Countries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountries()
    {
        return $this->hasMany(Country::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Countries0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountries0()
    {
        return $this->hasMany(Country::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CurHisExchgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurHisExchgs()
    {
        return $this->hasMany(CurHisExchg::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CurHisTaxes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurHisTaxes()
    {
        return $this->hasMany(CurHisTax::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Currencies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies()
    {
        return $this->hasMany(Currency::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Currencies0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies0()
    {
        return $this->hasMany(Currency::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CusGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCusGroups()
    {
        return $this->hasMany(CusGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[CusGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCusGroups0()
    {
        return $this->hasMany(CusGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Customers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers0()
    {
        return $this->hasMany(Customer::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Departments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments0()
    {
        return $this->hasMany(Department::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DeptItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems()
    {
        return $this->hasMany(DeptItem::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DeptItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems0()
    {
        return $this->hasMany(DeptItem::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DeptUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptUsers()
    {
        return $this->hasMany(DeptUser::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DiagOpExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiagOpExts()
    {
        return $this->hasMany(DiagOpExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DiagOpExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiagOpExts0()
    {
        return $this->hasMany(DiagOpExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Diets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiets()
    {
        return $this->hasMany(Diet::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Diets0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiets0()
    {
        return $this->hasMany(Diet::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Districts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts()
    {
        return $this->hasMany(District::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Districts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistricts0()
    {
        return $this->hasMany(District::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DownPayments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDownPayments()
    {
        return $this->hasMany(DownPayment::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[DownPayments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDownPayments0()
    {
        return $this->hasMany(DownPayment::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Educations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducations()
    {
        return $this->hasMany(Education::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Educations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducations0()
    {
        return $this->hasMany(Education::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Ethnicities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEthnicities()
    {
        return $this->hasMany(Ethnicity::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Ethnicities0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEthnicities0()
    {
        return $this->hasMany(Ethnicity::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[EventLogExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEventLogExts()
    {
        return $this->hasMany(EventLogExt::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Exams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams()
    {
        return $this->hasMany(Exam::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Exams0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExams0()
    {
        return $this->hasMany(Exam::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FeeAmbulances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeeAmbulances()
    {
        return $this->hasMany(FeeAmbulance::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FeeAmbulances0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeeAmbulances0()
    {
        return $this->hasMany(FeeAmbulance::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FiscalSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiscalSetups()
    {
        return $this->hasMany(FiscalSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FiscalSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiscalSetups0()
    {
        return $this->hasMany(FiscalSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Folios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios0()
    {
        return $this->hasMany(Folio::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioCosChanges]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioCosChanges()
    {
        return $this->hasMany(FolioCosChange::className(), ['approval_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioExamValidates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioExamValidates()
    {
        return $this->hasMany(FolioExamValidate::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItems()
    {
        return $this->hasMany(FolioItem::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItems0()
    {
        return $this->hasMany(FolioItem::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioItemAutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemAutos()
    {
        return $this->hasMany(FolioItemAuto::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioItemAutos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioItemAutos0()
    {
        return $this->hasMany(FolioItemAuto::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioMedStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioMedStatuses()
    {
        return $this->hasMany(FolioMedStatus::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioMedStatuses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioMedStatuses0()
    {
        return $this->hasMany(FolioMedStatus::className(), ['user_name' => 'user_name']);
    }

    /**
     * Gets query for [[FolioTherapyItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyItems()
    {
        return $this->hasMany(FolioTherapyItem::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioTherapyItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioTherapyItems0()
    {
        return $this->hasMany(FolioTherapyItem::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FolioViewHasilXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioViewHasilXts()
    {
        return $this->hasMany(FolioViewHasilXt::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FormControlXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormControlXts()
    {
        return $this->hasMany(FormControlXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[FormControlXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormControlXts0()
    {
        return $this->hasMany(FormControlXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlAccounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccounts()
    {
        return $this->hasMany(GlAccount::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlAccounts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccounts0()
    {
        return $this->hasMany(GlAccount::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlBudgets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlBudgets()
    {
        return $this->hasMany(GlBudget::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlBudgets0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlBudgets0()
    {
        return $this->hasMany(GlBudget::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJournals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournals()
    {
        return $this->hasMany(GlJournal::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJournals0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournals0()
    {
        return $this->hasMany(GlJournal::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJournalTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalTypes()
    {
        return $this->hasMany(GlJournalType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJournalTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalTypes0()
    {
        return $this->hasMany(GlJournalType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJschedules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJschedules()
    {
        return $this->hasMany(GlJschedule::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJschedules0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJschedules0()
    {
        return $this->hasMany(GlJschedule::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJtemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtemplates()
    {
        return $this->hasMany(GlJtemplate::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlJtemplates0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtemplates0()
    {
        return $this->hasMany(GlJtemplate::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlSetups()
    {
        return $this->hasMany(GlSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[GlSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlSetups0()
    {
        return $this->hasMany(GlSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[HkSubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHkSubUnits()
    {
        return $this->hasMany(HkSubUnit::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Icds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcds()
    {
        return $this->hasMany(Icd::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Icds0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcds0()
    {
        return $this->hasMany(Icd::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[IcdProcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcdProcs()
    {
        return $this->hasMany(IcdProc::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[IcdProcs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcdProcs0()
    {
        return $this->hasMany(IcdProc::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvAdjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjs()
    {
        return $this->hasMany(InvAdj::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvAdjs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjs0()
    {
        return $this->hasMany(InvAdj::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvAdjAccounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjAccounts()
    {
        return $this->hasMany(InvAdjAccount::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvAdjAccounts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjAccounts0()
    {
        return $this->hasMany(InvAdjAccount::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvCounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvCounts()
    {
        return $this->hasMany(InvCount::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvCounts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvCounts0()
    {
        return $this->hasMany(InvCount::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvSetups()
    {
        return $this->hasMany(InvSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvSetups0()
    {
        return $this->hasMany(InvSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvTransfers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvTransfers()
    {
        return $this->hasMany(InvTransfer::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[InvTransfers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvTransfers0()
    {
        return $this->hasMany(InvTransfer::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Items0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems0()
    {
        return $this->hasMany(Item::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ItemGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemGroups()
    {
        return $this->hasMany(ItemGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ItemGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemGroups0()
    {
        return $this->hasMany(ItemGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ItemMcuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemMcuExts()
    {
        return $this->hasMany(ItemMcuExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ItemMcuExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemMcuExts0()
    {
        return $this->hasMany(ItemMcuExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ItemTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes()
    {
        return $this->hasMany(ItemType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ItemTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes0()
    {
        return $this->hasMany(ItemType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[LaborLuarXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLaborLuarXts()
    {
        return $this->hasMany(LaborLuarXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Locations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations0()
    {
        return $this->hasMany(Location::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MaritalStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaritalStatuses()
    {
        return $this->hasMany(MaritalStatus::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MaritalStatuses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaritalStatuses0()
    {
        return $this->hasMany(MaritalStatus::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MarketingCardExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardExts()
    {
        return $this->hasMany(MarketingCardExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MarketingVisites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingVisites()
    {
        return $this->hasMany(MarketingVisite::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MarketingVisites0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingVisites0()
    {
        return $this->hasMany(MarketingVisite::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[McuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuExts()
    {
        return $this->hasMany(McuExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[McuExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuExts0()
    {
        return $this->hasMany(McuExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MedStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedStatuses()
    {
        return $this->hasMany(MedStatus::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MedStatuses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedStatuses0()
    {
        return $this->hasMany(MedStatus::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MfgSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfgSetups()
    {
        return $this->hasMany(MfgSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[MfgSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfgSetups0()
    {
        return $this->hasMany(MfgSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Morders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorders()
    {
        return $this->hasMany(Morder::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Morders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorders0()
    {
        return $this->hasMany(Morder::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Mreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceipts()
    {
        return $this->hasMany(Mreceipt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Mreceipts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceipts0()
    {
        return $this->hasMany(Mreceipt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvAdjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjs()
    {
        return $this->hasMany(NInvAdj::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvAdjs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjs0()
    {
        return $this->hasMany(NInvAdj::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvAdjAccounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjAccounts()
    {
        return $this->hasMany(NInvAdjAccount::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvAdjAccounts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjAccounts0()
    {
        return $this->hasMany(NInvAdjAccount::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvCounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvCounts()
    {
        return $this->hasMany(NInvCount::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvCounts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvCounts0()
    {
        return $this->hasMany(NInvCount::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups()
    {
        return $this->hasMany(NInvSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups0()
    {
        return $this->hasMany(NInvSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvTransfers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvTransfers()
    {
        return $this->hasMany(NInvTransfer::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NInvTransfers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvTransfers0()
    {
        return $this->hasMany(NInvTransfer::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems()
    {
        return $this->hasMany(NItem::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems0()
    {
        return $this->hasMany(NItem::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NItemGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemGroups()
    {
        return $this->hasMany(NItemGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NItemGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemGroups0()
    {
        return $this->hasMany(NItemGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NItemTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes()
    {
        return $this->hasMany(NItemType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NItemTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes0()
    {
        return $this->hasMany(NItemType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NPorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders()
    {
        return $this->hasMany(NPorder::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NPorders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders0()
    {
        return $this->hasMany(NPorder::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NPreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceipts()
    {
        return $this->hasMany(NPreceipt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NPreceipts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPreceipts0()
    {
        return $this->hasMany(NPreceipt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NPurchaseSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPurchaseSetups()
    {
        return $this->hasMany(NPurchaseSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NPurchaseSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPurchaseSetups0()
    {
        return $this->hasMany(NPurchaseSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NUoms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNUoms()
    {
        return $this->hasMany(NUom::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NUoms0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNUoms0()
    {
        return $this->hasMany(NUom::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NWarehouses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNWarehouses()
    {
        return $this->hasMany(NWarehouse::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NWarehouses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNWarehouses0()
    {
        return $this->hasMany(NWarehouse::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Nationalities]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNationalities()
    {
        return $this->hasMany(Nationality::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Nationalities0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNationalities0()
    {
        return $this->hasMany(Nationality::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NurseCareNotes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNurseCareNotes()
    {
        return $this->hasMany(NurseCareNotes::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[NurseCareVsigns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNurseCareVsigns()
    {
        return $this->hasMany(NurseCareVsign::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Occupations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOccupations()
    {
        return $this->hasMany(Occupation::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Occupations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOccupations0()
    {
        return $this->hasMany(Occupation::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OccupationXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOccupationXts()
    {
        return $this->hasMany(OccupationXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OccupationXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOccupationXts0()
    {
        return $this->hasMany(OccupationXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiFileXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiFileXts()
    {
        return $this->hasMany(OkupasiFileXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiFileXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiFileXts0()
    {
        return $this->hasMany(OkupasiFileXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiPatientXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiPatientXts()
    {
        return $this->hasMany(OkupasiPatientXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiPatientXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiPatientXts0()
    {
        return $this->hasMany(OkupasiPatientXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiPayByXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiPayByXts()
    {
        return $this->hasMany(OkupasiPayByXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiPhotoXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiPhotoXts()
    {
        return $this->hasMany(OkupasiPhotoXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiXts()
    {
        return $this->hasMany(OkupasiXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[OkupasiXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiXts0()
    {
        return $this->hasMany(OkupasiXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Patients0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients0()
    {
        return $this->hasMany(Patient::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PatientGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientGroups()
    {
        return $this->hasMany(PatientGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PatientGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientGroups0()
    {
        return $this->hasMany(PatientGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PatientTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientTypes()
    {
        return $this->hasMany(PatientType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PatientTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientTypes0()
    {
        return $this->hasMany(PatientType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PayBies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PayBies0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies0()
    {
        return $this->hasMany(PayBy::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PayByItemPriceMcuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItemPriceMcuExts()
    {
        return $this->hasMany(PayByItemPriceMcuExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payment::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Payments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments0()
    {
        return $this->hasMany(Payment::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PersonalRelations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalRelations()
    {
        return $this->hasMany(PersonalRelation::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PersonalRelations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalRelations0()
    {
        return $this->hasMany(PersonalRelation::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PhoneExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneExts()
    {
        return $this->hasMany(PhoneExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PhoneExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhoneExts0()
    {
        return $this->hasMany(PhoneExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PicPays]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicPays()
    {
        return $this->hasMany(PicPay::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Porders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders()
    {
        return $this->hasMany(Porder::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Porders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders0()
    {
        return $this->hasMany(Porder::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Preceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceipts()
    {
        return $this->hasMany(Preceipt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Preceipts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceipts0()
    {
        return $this->hasMany(Preceipt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Provinces]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvinces()
    {
        return $this->hasMany(Province::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Provinces0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvinces0()
    {
        return $this->hasMany(Province::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[PurchaseSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseSetups()
    {
        return $this->hasMany(PurchaseSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[RadiologiFilmXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRadiologiFilmXts()
    {
        return $this->hasMany(RadiologiFilmXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[RadiologiFilmXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRadiologiFilmXts0()
    {
        return $this->hasMany(RadiologiFilmXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ReferenceTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferenceTypes()
    {
        return $this->hasMany(ReferenceType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ReferenceTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferenceTypes0()
    {
        return $this->hasMany(ReferenceType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[RegSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups()
    {
        return $this->hasMany(RegSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[RegSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups0()
    {
        return $this->hasMany(RegSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Registrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Registrations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations0()
    {
        return $this->hasMany(Registration::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[RegistrationFills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationFills()
    {
        return $this->hasMany(RegistrationFill::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[RegistrationFills0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationFills0()
    {
        return $this->hasMany(RegistrationFill::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Religions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReligions()
    {
        return $this->hasMany(Religion::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Religions0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReligions0()
    {
        return $this->hasMany(Religion::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Reports0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports0()
    {
        return $this->hasMany(Report::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ReportAccesses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportAccesses()
    {
        return $this->hasMany(ReportAccess::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Resources]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResources()
    {
        return $this->hasMany(Resource::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Resources0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResources0()
    {
        return $this->hasMany(Resource::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ResourceGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResourceGroups()
    {
        return $this->hasMany(ResourceGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ResourceGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResourceGroups0()
    {
        return $this->hasMany(ResourceGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ResourceTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResourceTypes()
    {
        return $this->hasMany(ResourceType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ResourceTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResourceTypes0()
    {
        return $this->hasMany(ResourceType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ResponeTimePoliXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponeTimePoliXts()
    {
        return $this->hasMany(ResponeTimePoliXt::className(), ['user_end' => 'user_id']);
    }

    /**
     * Gets query for [[ResponeTimePoliXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponeTimePoliXts0()
    {
        return $this->hasMany(ResponeTimePoliXt::className(), ['user_start' => 'user_id']);
    }

    /**
     * Gets query for [[SalesSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetups()
    {
        return $this->hasMany(SalesSetup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[SalesSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetups0()
    {
        return $this->hasMany(SalesSetup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Salesmen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesmen()
    {
        return $this->hasMany(Salesman::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Salesmen0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesmen0()
    {
        return $this->hasMany(Salesman::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Salutations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalutations()
    {
        return $this->hasMany(Salutation::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Salutations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalutations0()
    {
        return $this->hasMany(Salutation::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ScrtPolicies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtPolicies()
    {
        return $this->hasMany(ScrtPolicy::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ScrtPolicies0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtPolicies0()
    {
        return $this->hasMany(ScrtPolicy::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Policy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPolicy()
    {
        return $this->hasOne(ScrtPolicy::className(), ['policy_id' => 'policy_id']);
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(ScrtGroup::className(), ['group_id' => 'group_id']);
    }

    /**
     * Gets query for [[Policy0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPolicy0()
    {
        return $this->hasOne(ScrtPolicy::className(), ['policy_id' => 'policy_id']);
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
     * Gets query for [[ScrtUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtUsers()
    {
        return $this->hasMany(ScrtUser::className(), ['created_user_id' => 'user_id']);
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
     * Gets query for [[ScrtUsers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtUsers0()
    {
        return $this->hasMany(ScrtUser::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ServiceExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceExts()
    {
        return $this->hasMany(ServiceExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ServiceExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServiceExts0()
    {
        return $this->hasMany(ServiceExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Sexes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSexes()
    {
        return $this->hasMany(Sex::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Sexes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSexes0()
    {
        return $this->hasMany(Sex::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Shipments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipments()
    {
        return $this->hasMany(Shipment::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Shipments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShipments0()
    {
        return $this->hasMany(Shipment::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Sorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders()
    {
        return $this->hasMany(Sorder::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Sorders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders0()
    {
        return $this->hasMany(Sorder::className(), ['authorized_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Sorders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders1()
    {
        return $this->hasMany(Sorder::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Staff0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff0()
    {
        return $this->hasMany(Staff::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffCutiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffCutiXts()
    {
        return $this->hasMany(StaffCutiXt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffCutiXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffCutiXts0()
    {
        return $this->hasMany(StaffCutiXt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffGroups()
    {
        return $this->hasMany(StaffGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffGroups0()
    {
        return $this->hasMany(StaffGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffStatusScheduleExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffStatusScheduleExts()
    {
        return $this->hasMany(StaffStatusScheduleExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffStatusScheduleExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffStatusScheduleExts0()
    {
        return $this->hasMany(StaffStatusScheduleExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffTypes()
    {
        return $this->hasMany(StaffType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[StaffTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffTypes0()
    {
        return $this->hasMany(StaffType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[SubUnits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits()
    {
        return $this->hasMany(SubUnit::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[SubUnits0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnits0()
    {
        return $this->hasMany(SubUnit::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Subdistricts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdistricts()
    {
        return $this->hasMany(Subdistrict::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Subdistricts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdistricts0()
    {
        return $this->hasMany(Subdistrict::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Supervisors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisors()
    {
        return $this->hasMany(Supervisor::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Supervisors0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisors0()
    {
        return $this->hasMany(Supervisor::className(), ['supervisor_id' => 'user_id']);
    }

    /**
     * Gets query for [[Supervisors1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisors1()
    {
        return $this->hasMany(ScrtUser::className(), ['user_id' => 'supervisor_id'])->viaTable('supervisor', ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(ScrtUser::className(), ['user_id' => 'user_id'])->viaTable('supervisor', ['supervisor_id' => 'user_id']);
    }

    /**
     * Gets query for [[Surgeries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgeries()
    {
        return $this->hasMany(Surgery::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Surgeries0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgeries0()
    {
        return $this->hasMany(Surgery::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[SystemParams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSystemParams()
    {
        return $this->hasMany(SystemParam::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Taxes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxes()
    {
        return $this->hasMany(Tax::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Taxes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxes0()
    {
        return $this->hasMany(Tax::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[TermPayments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTermPayments()
    {
        return $this->hasMany(TermPayment::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[TermPayments0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTermPayments0()
    {
        return $this->hasMany(TermPayment::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[TindakanOpExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanOpExts()
    {
        return $this->hasMany(TindakanOpExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[TindakanOpExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanOpExts0()
    {
        return $this->hasMany(TindakanOpExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Units]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Units0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits0()
    {
        return $this->hasMany(Unit::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Uoms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUoms()
    {
        return $this->hasMany(Uom::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Uoms0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUoms0()
    {
        return $this->hasMany(Uom::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ValueEditFarmasiExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getValueEditFarmasiExts()
    {
        return $this->hasMany(ValueEditFarmasiExt::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[ValueEditFarmasiExts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getValueEditFarmasiExts0()
    {
        return $this->hasMany(ValueEditFarmasiExt::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[VenGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenGroups()
    {
        return $this->hasMany(VenGroup::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[VenGroups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenGroups0()
    {
        return $this->hasMany(VenGroup::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[VenTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenTypes()
    {
        return $this->hasMany(VenType::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[VenTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenTypes0()
    {
        return $this->hasMany(VenType::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Vendors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendors()
    {
        return $this->hasMany(Vendor::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Vendors0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendors0()
    {
        return $this->hasMany(Vendor::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Villages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVillages()
    {
        return $this->hasMany(Village::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Villages0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVillages0()
    {
        return $this->hasMany(Village::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Warehouses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses()
    {
        return $this->hasMany(Warehouse::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Warehouses0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses0()
    {
        return $this->hasMany(Warehouse::className(), ['modified_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Zipcodes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZipcodes()
    {
        return $this->hasMany(Zipcode::className(), ['created_user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Zipcodes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZipcodes0()
    {
        return $this->hasMany(Zipcode::className(), ['modified_user_id' => 'user_id']);
    }
}
