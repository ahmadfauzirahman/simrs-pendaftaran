<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "purchase_setup".
 *
 * @property int $company_id
 * @property int|null $qty_received_restriction
 * @property int|null $qty_ordered_auto_calc
 * @property int|null $default_show_order
 * @property int|null $default_show_receipt
 * @property int|null $porder_rpt_cat_id
 * @property int|null $preceipt_rpt_cat_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $preceipt_default_qty
 *
 * @property ReportCat $porderRptCat
 * @property ReportCat $preceiptRptCat
 * @property ReportCat $createdUser
 * @property ScrtUser $modifiedUser
 * @property Company $company
 */
class PurchaseSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'purchase_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'qty_received_restriction', 'qty_ordered_auto_calc', 'default_show_order', 'default_show_receipt', 'porder_rpt_cat_id', 'preceipt_rpt_cat_id', 'created_user_id', 'modified_user_id', 'preceipt_default_qty'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['porder_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['porder_rpt_cat_id' => 'category_id']],
            [['preceipt_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['preceipt_rpt_cat_id' => 'category_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['created_user_id' => 'category_id']],
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
            'qty_received_restriction' => 'Qty Received Restriction',
            'qty_ordered_auto_calc' => 'Qty Ordered Auto Calc',
            'default_show_order' => 'Default Show Order',
            'default_show_receipt' => 'Default Show Receipt',
            'porder_rpt_cat_id' => 'Porder Rpt Cat ID',
            'preceipt_rpt_cat_id' => 'Preceipt Rpt Cat ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'preceipt_default_qty' => 'Preceipt Default Qty',
        ];
    }

    /**
     * Gets query for [[PorderRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorderRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'porder_rpt_cat_id']);
    }

    /**
     * Gets query for [[PreceiptRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceiptRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'preceipt_rpt_cat_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'created_user_id']);
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
