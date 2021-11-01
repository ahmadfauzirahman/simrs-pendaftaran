<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_setup".
 *
 * @property int $company_id
 * @property int|null $invoice_warehouse_id
 * @property int|null $return_warehouse_id
 * @property int|null $credit_limit_authority
 * @property int|null $ar_inv_gl_jtype_id
 * @property int|null $ar_pmt_gl_jtype_id
 * @property int|null $ar_inv_reg_gl_type_id
 * @property int|null $default_show_invoice
 * @property int|null $default_show_payment
 * @property int|null $ar_inv_rpt_cat_id
 * @property int|null $ar_inv_bind_rpt_cat_id
 * @property int|null $ar_pmt_rpt_cat_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Warehouse $returnWarehouse
 * @property ReportCat $arPmtRptCat
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Warehouse $invoiceWarehouse
 * @property Company $company
 * @property GlJournalType $arInvGlJtype
 * @property GlJournalType $arPmtGlJtype
 * @property ReportCat $arInvRptCat
 * @property ReportCat $arInvBindRptCat
 */
class ArSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'invoice_warehouse_id', 'return_warehouse_id', 'credit_limit_authority', 'ar_inv_gl_jtype_id', 'ar_pmt_gl_jtype_id', 'ar_inv_reg_gl_type_id', 'default_show_invoice', 'default_show_payment', 'ar_inv_rpt_cat_id', 'ar_inv_bind_rpt_cat_id', 'ar_pmt_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['return_warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['return_warehouse_id' => 'warehouse_id']],
            [['ar_pmt_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['ar_pmt_rpt_cat_id' => 'category_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['invoice_warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['invoice_warehouse_id' => 'warehouse_id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
            [['ar_inv_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['ar_inv_gl_jtype_id' => 'journal_type_id']],
            [['ar_pmt_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['ar_pmt_gl_jtype_id' => 'journal_type_id']],
            [['ar_inv_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['ar_inv_rpt_cat_id' => 'category_id']],
            [['ar_inv_bind_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['ar_inv_bind_rpt_cat_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'invoice_warehouse_id' => 'Invoice Warehouse ID',
            'return_warehouse_id' => 'Return Warehouse ID',
            'credit_limit_authority' => 'Credit Limit Authority',
            'ar_inv_gl_jtype_id' => 'Ar Inv Gl Jtype ID',
            'ar_pmt_gl_jtype_id' => 'Ar Pmt Gl Jtype ID',
            'ar_inv_reg_gl_type_id' => 'Ar Inv Reg Gl Type ID',
            'default_show_invoice' => 'Default Show Invoice',
            'default_show_payment' => 'Default Show Payment',
            'ar_inv_rpt_cat_id' => 'Ar Inv Rpt Cat ID',
            'ar_inv_bind_rpt_cat_id' => 'Ar Inv Bind Rpt Cat ID',
            'ar_pmt_rpt_cat_id' => 'Ar Pmt Rpt Cat ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ReturnWarehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReturnWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'return_warehouse_id']);
    }

    /**
     * Gets query for [[ArPmtRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmtRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'ar_pmt_rpt_cat_id']);
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
     * Gets query for [[InvoiceWarehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'invoice_warehouse_id']);
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
     * Gets query for [[ArInvGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'ar_inv_gl_jtype_id']);
    }

    /**
     * Gets query for [[ArPmtGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArPmtGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'ar_pmt_gl_jtype_id']);
    }

    /**
     * Gets query for [[ArInvRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'ar_inv_rpt_cat_id']);
    }

    /**
     * Gets query for [[ArInvBindRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvBindRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'ar_inv_bind_rpt_cat_id']);
    }
}
