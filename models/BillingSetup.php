<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing_setup".
 *
 * @property int $company_id
 * @property int|null $claim_mgmt_default_show_reg
 * @property int|null $bill_summary_rpt_cat_id
 * @property int|null $billing_pmt_rpt_cat_id
 *
 * @property ReportCat $billSummaryRptCat
 * @property ReportCat $billingPmtRptCat
 */
class BillingSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'claim_mgmt_default_show_reg', 'bill_summary_rpt_cat_id', 'billing_pmt_rpt_cat_id'], 'integer'],
            [['company_id'], 'unique'],
            [['bill_summary_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['bill_summary_rpt_cat_id' => 'category_id']],
            [['billing_pmt_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['billing_pmt_rpt_cat_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'claim_mgmt_default_show_reg' => 'Claim Mgmt Default Show Reg',
            'bill_summary_rpt_cat_id' => 'Bill Summary Rpt Cat ID',
            'billing_pmt_rpt_cat_id' => 'Billing Pmt Rpt Cat ID',
        ];
    }

    /**
     * Gets query for [[BillSummaryRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillSummaryRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'bill_summary_rpt_cat_id']);
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
}
