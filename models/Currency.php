<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "currency".
 *
 * @property int $currency_id
 * @property string $currency_name
 * @property float|null $exchange_rate
 * @property float|null $taxation_rate
 * @property string|null $symbol
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $exchg_gl_acc_id
 * @property int|null $ap_gl_acc_id
 * @property int|null $ap_disc_gl_acc_id
 * @property int|null $ap_dp_gl_acc_id
 * @property int|null $ap_pdc_gl_acc_id
 * @property int|null $ar_gl_acc_id
 * @property int|null $ar_disc_gl_acc_id
 * @property int|null $ar_dp_gl_acc_id
 * @property int|null $ar_pdc_gl_acc_id
 * @property int|null $pl_gl_acc_id
 * @property int|null $rounding_gl_acc_id
 * @property int|null $writeoff_gl_acc_id
 * @property int|null $rounding_type
 * @property float|null $rounding_value
 *
 * @property ApInv[] $apInvs
 * @property ApPmt[] $apPmts
 * @property ArInv[] $arInvs
 * @property ArPmt[] $arPmts
 * @property Bank[] $banks
 * @property BankJournal[] $bankJournals
 * @property BankJournalDet[] $bankJournalDets
 * @property CurHisExchg[] $curHisExchgs
 * @property CurHisTax[] $curHisTaxes
 * @property ScrtUser $createdUser
 * @property GlAccount $apGlAcc
 * @property GlAccount $apDiscGlAcc
 * @property GlAccount $apDpGlAcc
 * @property GlAccount $arGlAcc
 * @property GlAccount $arDiscGlAcc
 * @property GlAccount $arDpGlAcc
 * @property GlAccount $roundingGlAcc
 * @property GlAccount $writeoffGlAcc
 * @property ScrtUser $modifiedUser
 * @property GlAccount $exchgGlAcc
 * @property Customer[] $customers
 * @property FiscalSetup[] $fiscalSetups
 * @property GlJfoDet[] $glJfoDets
 * @property NPorder[] $nPorders
 * @property Porder[] $porders
 * @property Sorder[] $sorders
 * @property VenBalance[] $venBalances
 * @property Vendor[] $vendors
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'currency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency_name'], 'required'],
            [['exchange_rate', 'taxation_rate', 'rounding_value'], 'number'],
            [['created_user_id', 'modified_user_id', 'exchg_gl_acc_id', 'ap_gl_acc_id', 'ap_disc_gl_acc_id', 'ap_dp_gl_acc_id', 'ap_pdc_gl_acc_id', 'ar_gl_acc_id', 'ar_disc_gl_acc_id', 'ar_dp_gl_acc_id', 'ar_pdc_gl_acc_id', 'pl_gl_acc_id', 'rounding_gl_acc_id', 'writeoff_gl_acc_id', 'rounding_type'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['currency_name'], 'string', 'max' => 50],
            [['symbol'], 'string', 'max' => 5],
            [['currency_name'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['ap_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['ap_gl_acc_id' => 'account_id']],
            [['ap_disc_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['ap_disc_gl_acc_id' => 'account_id']],
            [['ap_dp_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['ap_dp_gl_acc_id' => 'account_id']],
            [['ar_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['ar_gl_acc_id' => 'account_id']],
            [['ar_disc_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['ar_disc_gl_acc_id' => 'account_id']],
            [['ar_dp_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['ar_dp_gl_acc_id' => 'account_id']],
            [['rounding_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['rounding_gl_acc_id' => 'account_id']],
            [['writeoff_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['writeoff_gl_acc_id' => 'account_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['exchg_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['exchg_gl_acc_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'currency_id' => 'Currency ID',
            'currency_name' => 'Currency Name',
            'exchange_rate' => 'Exchange Rate',
            'taxation_rate' => 'Taxation Rate',
            'symbol' => 'Symbol',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'exchg_gl_acc_id' => 'Exchg Gl Acc ID',
            'ap_gl_acc_id' => 'Ap Gl Acc ID',
            'ap_disc_gl_acc_id' => 'Ap Disc Gl Acc ID',
            'ap_dp_gl_acc_id' => 'Ap Dp Gl Acc ID',
            'ap_pdc_gl_acc_id' => 'Ap Pdc Gl Acc ID',
            'ar_gl_acc_id' => 'Ar Gl Acc ID',
            'ar_disc_gl_acc_id' => 'Ar Disc Gl Acc ID',
            'ar_dp_gl_acc_id' => 'Ar Dp Gl Acc ID',
            'ar_pdc_gl_acc_id' => 'Ar Pdc Gl Acc ID',
            'pl_gl_acc_id' => 'Pl Gl Acc ID',
            'rounding_gl_acc_id' => 'Rounding Gl Acc ID',
            'writeoff_gl_acc_id' => 'Writeoff Gl Acc ID',
            'rounding_type' => 'Rounding Type',
            'rounding_value' => 'Rounding Value',
        ];
    }

    /**
     * Gets query for [[ApInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs()
    {
        return $this->hasMany(ApInv::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[ApPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmts()
    {
        return $this->hasMany(ApPmt::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[ArPmts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmts()
    {
        return $this->hasMany(ArPmt::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[Banks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBanks()
    {
        return $this->hasMany(Bank::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[BankJournals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournals()
    {
        return $this->hasMany(BankJournal::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[BankJournalDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournalDets()
    {
        return $this->hasMany(BankJournalDet::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[CurHisExchgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurHisExchgs()
    {
        return $this->hasMany(CurHisExchg::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[CurHisTaxes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurHisTaxes()
    {
        return $this->hasMany(CurHisTax::className(), ['currency_id' => 'currency_id']);
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
     * Gets query for [[ApGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'ap_gl_acc_id']);
    }

    /**
     * Gets query for [[ApDiscGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApDiscGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'ap_disc_gl_acc_id']);
    }

    /**
     * Gets query for [[ApDpGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApDpGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'ap_dp_gl_acc_id']);
    }

    /**
     * Gets query for [[ArGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'ar_gl_acc_id']);
    }

    /**
     * Gets query for [[ArDiscGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArDiscGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'ar_disc_gl_acc_id']);
    }

    /**
     * Gets query for [[ArDpGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArDpGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'ar_dp_gl_acc_id']);
    }

    /**
     * Gets query for [[RoundingGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRoundingGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'rounding_gl_acc_id']);
    }

    /**
     * Gets query for [[WriteoffGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWriteoffGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'writeoff_gl_acc_id']);
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
     * Gets query for [[ExchgGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExchgGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'exchg_gl_acc_id']);
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[FiscalSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiscalSetups()
    {
        return $this->hasMany(FiscalSetup::className(), ['company_currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[NPorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders()
    {
        return $this->hasMany(NPorder::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[Porders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders()
    {
        return $this->hasMany(Porder::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[Sorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders()
    {
        return $this->hasMany(Sorder::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[VenBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVenBalances()
    {
        return $this->hasMany(VenBalance::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[Vendors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendors()
    {
        return $this->hasMany(Vendor::className(), ['vendor_id' => 'vendor_id'])->viaTable('ven_balance', ['currency_id' => 'currency_id']);
    }
}
