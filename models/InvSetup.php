<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_setup".
 *
 * @property int $company_id
 * @property int|null $default_show_transfer
 * @property int|null $count_adjust_in_acc_id
 * @property int|null $count_adjust_out_acc_id
 * @property int|null $adj_rpt_cat_id
 * @property int|null $transfer_rpt_cat_id
 * @property int|null $count_rpt_cat_id
 * @property int|null $default_show_adjustment
 * @property int|null $default_show_count
 * @property int|null $adj_gl_jtype_id
 * @property int|null $default_show_item
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property InvAdjAccount $countAdjustInAcc
 * @property InvAdjAccount $countAdjustOutAcc
 * @property ReportCat $adjRptCat
 * @property ReportCat $transferRptCat
 * @property ReportCat $countRptCat
 * @property GlJournalType $adjGlJtype
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class InvSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'default_show_transfer', 'count_adjust_in_acc_id', 'count_adjust_out_acc_id', 'adj_rpt_cat_id', 'transfer_rpt_cat_id', 'count_rpt_cat_id', 'default_show_adjustment', 'default_show_count', 'adj_gl_jtype_id', 'default_show_item', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['count_adjust_in_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvAdjAccount::className(), 'targetAttribute' => ['count_adjust_in_acc_id' => 'account_id']],
            [['count_adjust_out_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvAdjAccount::className(), 'targetAttribute' => ['count_adjust_out_acc_id' => 'account_id']],
            [['adj_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['adj_rpt_cat_id' => 'category_id']],
            [['transfer_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['transfer_rpt_cat_id' => 'category_id']],
            [['count_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['count_rpt_cat_id' => 'category_id']],
            [['adj_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['adj_gl_jtype_id' => 'journal_type_id']],
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
            'company_id' => 'Company ID',
            'default_show_transfer' => 'Default Show Transfer',
            'count_adjust_in_acc_id' => 'Count Adjust In Acc ID',
            'count_adjust_out_acc_id' => 'Count Adjust Out Acc ID',
            'adj_rpt_cat_id' => 'Adj Rpt Cat ID',
            'transfer_rpt_cat_id' => 'Transfer Rpt Cat ID',
            'count_rpt_cat_id' => 'Count Rpt Cat ID',
            'default_show_adjustment' => 'Default Show Adjustment',
            'default_show_count' => 'Default Show Count',
            'adj_gl_jtype_id' => 'Adj Gl Jtype ID',
            'default_show_item' => 'Default Show Item',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[CountAdjustInAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountAdjustInAcc()
    {
        return $this->hasOne(InvAdjAccount::className(), ['account_id' => 'count_adjust_in_acc_id']);
    }

    /**
     * Gets query for [[CountAdjustOutAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountAdjustOutAcc()
    {
        return $this->hasOne(InvAdjAccount::className(), ['account_id' => 'count_adjust_out_acc_id']);
    }

    /**
     * Gets query for [[AdjRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdjRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'adj_rpt_cat_id']);
    }

    /**
     * Gets query for [[TransferRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransferRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'transfer_rpt_cat_id']);
    }

    /**
     * Gets query for [[CountRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'count_rpt_cat_id']);
    }

    /**
     * Gets query for [[AdjGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdjGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'adj_gl_jtype_id']);
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
}
