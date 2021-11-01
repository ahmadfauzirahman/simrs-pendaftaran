<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_setup".
 *
 * @property int $company_id
 * @property int|null $reg_rpt_cat_id
 * @property int|null $order_rpt_cat_id
 * @property int|null $pos_rpt_cat_id
 * @property int|null $billing_pmt_rpt_cat_id
 * @property int|null $nurse_care_rpt_cat_id
 * @property int|null $self_payby_id
 * @property int|null $bpjs_online_payby_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $folio_gl_posting_type
 * @property string|null $folio_gl_posting_date
 * @property int|null $folio_gl_posting_period
 * @property int|null $folio_gl_posting_year
 * @property int|null $folio_gl_journal_id_active
 * @property int|null $default_show_patient
 * @property int|null $rof_rpt_cat_id
 * @property string|null $sustatus_allowed_reg
 * @property int|null $reregister_restriction
 * @property int|null $auto_post_folio_refer
 * @property int|null $release_cancelled_rsvp
 * @property string|null $web_rsvp_url
 *
 * @property Company $company
 * @property PayBy $selfPayby
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ReportCat $rofRptCat
 * @property ReportCat $regRptCat
 * @property ReportCat $orderRptCat
 * @property ReportCat $posRptCat
 * @property ReportCat $billingPmtRptCat
 * @property ReportCat $nurseCareRptCat
 */
class RegSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'reg_rpt_cat_id', 'order_rpt_cat_id', 'pos_rpt_cat_id', 'billing_pmt_rpt_cat_id', 'nurse_care_rpt_cat_id', 'self_payby_id', 'bpjs_online_payby_id', 'created_user_id', 'modified_user_id', 'folio_gl_posting_type', 'folio_gl_posting_period', 'folio_gl_posting_year', 'folio_gl_journal_id_active', 'default_show_patient', 'rof_rpt_cat_id', 'reregister_restriction', 'auto_post_folio_refer', 'release_cancelled_rsvp'], 'integer'],
            [['created_time', 'modified_time', 'folio_gl_posting_date'], 'safe'],
            [['sustatus_allowed_reg'], 'string', 'max' => 4],
            [['web_rsvp_url'], 'string', 'max' => 50],
            [['company_id'], 'unique'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
            [['self_payby_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['self_payby_id' => 'pay_by_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['rof_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['rof_rpt_cat_id' => 'category_id']],
            [['reg_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['reg_rpt_cat_id' => 'category_id']],
            [['order_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['order_rpt_cat_id' => 'category_id']],
            [['pos_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['pos_rpt_cat_id' => 'category_id']],
            [['billing_pmt_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['billing_pmt_rpt_cat_id' => 'category_id']],
            [['nurse_care_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['nurse_care_rpt_cat_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'reg_rpt_cat_id' => 'Reg Rpt Cat ID',
            'order_rpt_cat_id' => 'Order Rpt Cat ID',
            'pos_rpt_cat_id' => 'Pos Rpt Cat ID',
            'billing_pmt_rpt_cat_id' => 'Billing Pmt Rpt Cat ID',
            'nurse_care_rpt_cat_id' => 'Nurse Care Rpt Cat ID',
            'self_payby_id' => 'Self Payby ID',
            'bpjs_online_payby_id' => 'Bpjs Online Payby ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'folio_gl_posting_type' => 'Folio Gl Posting Type',
            'folio_gl_posting_date' => 'Folio Gl Posting Date',
            'folio_gl_posting_period' => 'Folio Gl Posting Period',
            'folio_gl_posting_year' => 'Folio Gl Posting Year',
            'folio_gl_journal_id_active' => 'Folio Gl Journal Id Active',
            'default_show_patient' => 'Default Show Patient',
            'rof_rpt_cat_id' => 'Rof Rpt Cat ID',
            'sustatus_allowed_reg' => 'Sustatus Allowed Reg',
            'reregister_restriction' => 'Reregister Restriction',
            'auto_post_folio_refer' => 'Auto Post Folio Refer',
            'release_cancelled_rsvp' => 'Release Cancelled Rsvp',
            'web_rsvp_url' => 'Web Rsvp Url',
        ];
    }

    /**
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[SelfPayby]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSelfPayby()
    {
        return $this->hasOne(PayBy::className(), ['pay_by_id' => 'self_payby_id']);
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
     * Gets query for [[RofRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRofRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'rof_rpt_cat_id']);
    }

    /**
     * Gets query for [[RegRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'reg_rpt_cat_id']);
    }

    /**
     * Gets query for [[OrderRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'order_rpt_cat_id']);
    }

    /**
     * Gets query for [[PosRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'pos_rpt_cat_id']);
    }

    /**
     * Gets query for [[BillingPmtRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'billing_pmt_rpt_cat_id']);
    }

    /**
     * Gets query for [[NurseCareRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNurseCareRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'nurse_care_rpt_cat_id']);
    }
}
