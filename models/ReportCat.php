<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_cat".
 *
 * @property int $category_id
 * @property string|null $category_name
 *
 * @property ApSetup[] $apSetups
 * @property ArSetup[] $arSetups
 * @property ArSetup[] $arSetups0
 * @property ArSetup[] $arSetups1
 * @property AssetSetup[] $assetSetups
 * @property BankSetup[] $bankSetups
 * @property BillingSetup[] $billingSetups
 * @property BillingSetup[] $billingSetups0
 * @property GlSetup[] $glSetups
 * @property HkSetup[] $hkSetups
 * @property InvSetup[] $invSetups
 * @property InvSetup[] $invSetups0
 * @property InvSetup[] $invSetups1
 * @property MedrecSetup[] $medrecSetups
 * @property MfgSetup[] $mfgSetups
 * @property MfgSetup[] $mfgSetups0
 * @property NInvSetup[] $nInvSetups
 * @property NInvSetup[] $nInvSetups0
 * @property NInvSetup[] $nInvSetups1
 * @property NPurchaseSetup[] $nPurchaseSetups
 * @property NPurchaseSetup[] $nPurchaseSetups0
 * @property NutrientSetup[] $nutrientSetups
 * @property PurchaseSetup[] $purchaseSetups
 * @property PurchaseSetup[] $purchaseSetups0
 * @property PurchaseSetup[] $purchaseSetups1
 * @property RegSetup[] $regSetups
 * @property RegSetup[] $regSetups0
 * @property RegSetup[] $regSetups1
 * @property RegSetup[] $regSetups2
 * @property RegSetup[] $regSetups3
 * @property RegSetup[] $regSetups4
 * @property Report[] $reports
 * @property SalesSetup[] $salesSetups
 * @property SalesSetup[] $salesSetups0
 */
class ReportCat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_cat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
        ];
    }

    /**
     * Gets query for [[ApSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApSetups()
    {
        return $this->hasMany(ApSetup::className(), ['ap_inv_bind_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[ArSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups()
    {
        return $this->hasMany(ArSetup::className(), ['ar_pmt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[ArSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups0()
    {
        return $this->hasMany(ArSetup::className(), ['ar_inv_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[ArSetups1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups1()
    {
        return $this->hasMany(ArSetup::className(), ['ar_inv_bind_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[AssetSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetSetups()
    {
        return $this->hasMany(AssetSetup::className(), ['asset_mv_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[BankSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankSetups()
    {
        return $this->hasMany(BankSetup::className(), ['bank_journal_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[BillingSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingSetups()
    {
        return $this->hasMany(BillingSetup::className(), ['bill_summary_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[BillingSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingSetups0()
    {
        return $this->hasMany(BillingSetup::className(), ['billing_pmt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[GlSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlSetups()
    {
        return $this->hasMany(GlSetup::className(), ['journal_slip_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[HkSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHkSetups()
    {
        return $this->hasMany(HkSetup::className(), ['subunit_mgt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[InvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvSetups()
    {
        return $this->hasMany(InvSetup::className(), ['adj_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[InvSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvSetups0()
    {
        return $this->hasMany(InvSetup::className(), ['transfer_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[InvSetups1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvSetups1()
    {
        return $this->hasMany(InvSetup::className(), ['count_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[MedrecSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedrecSetups()
    {
        return $this->hasMany(MedrecSetup::className(), ['medrec_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[MfgSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfgSetups()
    {
        return $this->hasMany(MfgSetup::className(), ['morder_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[MfgSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfgSetups0()
    {
        return $this->hasMany(MfgSetup::className(), ['mreceipt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[NInvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups()
    {
        return $this->hasMany(NInvSetup::className(), ['adj_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[NInvSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups0()
    {
        return $this->hasMany(NInvSetup::className(), ['transfer_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[NInvSetups1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups1()
    {
        return $this->hasMany(NInvSetup::className(), ['count_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[NPurchaseSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPurchaseSetups()
    {
        return $this->hasMany(NPurchaseSetup::className(), ['porder_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[NPurchaseSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPurchaseSetups0()
    {
        return $this->hasMany(NPurchaseSetup::className(), ['preceipt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[NutrientSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNutrientSetups()
    {
        return $this->hasMany(NutrientSetup::className(), ['diet_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[PurchaseSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseSetups()
    {
        return $this->hasMany(PurchaseSetup::className(), ['porder_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[PurchaseSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseSetups0()
    {
        return $this->hasMany(PurchaseSetup::className(), ['preceipt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[PurchaseSetups1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseSetups1()
    {
        return $this->hasMany(PurchaseSetup::className(), ['created_user_id' => 'category_id']);
    }

    /**
     * Gets query for [[RegSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups()
    {
        return $this->hasMany(RegSetup::className(), ['rof_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[RegSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups0()
    {
        return $this->hasMany(RegSetup::className(), ['reg_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[RegSetups1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups1()
    {
        return $this->hasMany(RegSetup::className(), ['order_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[RegSetups2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups2()
    {
        return $this->hasMany(RegSetup::className(), ['pos_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[RegSetups3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups3()
    {
        return $this->hasMany(RegSetup::className(), ['billing_pmt_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[RegSetups4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetups4()
    {
        return $this->hasMany(RegSetup::className(), ['nurse_care_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[Reports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReports()
    {
        return $this->hasMany(Report::className(), ['category_id' => 'category_id']);
    }

    /**
     * Gets query for [[SalesSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetups()
    {
        return $this->hasMany(SalesSetup::className(), ['sorder_rpt_cat_id' => 'category_id']);
    }

    /**
     * Gets query for [[SalesSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetups0()
    {
        return $this->hasMany(SalesSetup::className(), ['shipment_rpt_cat_id' => 'category_id']);
    }
}
