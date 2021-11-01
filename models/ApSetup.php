<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_setup".
 *
 * @property int $company_id
 * @property int|null $default_show_invoice
 * @property int|null $default_show_payment
 * @property int|null $allow_edit_price
 * @property int|null $ap_inv_detail_items
 * @property int|null $ap_inv_gl_jtype_id
 * @property int|null $ap_pmt_gl_jtype_id
 * @property int|null $ap_inv_bind_rpt_cat_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property GlJournalType $apInvGlJtype
 * @property GlJournalType $apPmtGlJtype
 * @property ReportCat $apInvBindRptCat
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Company $company
 */
class ApSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'default_show_invoice', 'default_show_payment', 'allow_edit_price', 'ap_inv_detail_items', 'ap_inv_gl_jtype_id', 'ap_pmt_gl_jtype_id', 'ap_inv_bind_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['ap_inv_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['ap_inv_gl_jtype_id' => 'journal_type_id']],
            [['ap_pmt_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['ap_pmt_gl_jtype_id' => 'journal_type_id']],
            [['ap_inv_bind_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['ap_inv_bind_rpt_cat_id' => 'category_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'default_show_invoice' => 'Default Show Invoice',
            'default_show_payment' => 'Default Show Payment',
            'allow_edit_price' => 'Allow Edit Price',
            'ap_inv_detail_items' => 'Ap Inv Detail Items',
            'ap_inv_gl_jtype_id' => 'Ap Inv Gl Jtype ID',
            'ap_pmt_gl_jtype_id' => 'Ap Pmt Gl Jtype ID',
            'ap_inv_bind_rpt_cat_id' => 'Ap Inv Bind Rpt Cat ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ApInvGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'ap_inv_gl_jtype_id']);
    }

    /**
     * Gets query for [[ApPmtGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApPmtGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'ap_pmt_gl_jtype_id']);
    }

    /**
     * Gets query for [[ApInvBindRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvBindRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'ap_inv_bind_rpt_cat_id']);
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
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}
