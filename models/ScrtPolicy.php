<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_policy".
 *
 * @property int $policy_id
 * @property string|null $policy_name
 * @property string|null $notes
 * @property int|null $login_option
 * @property int|null $full_access_module
 * @property string|null $reg_menu_cap
 * @property string|null $order_menu_cap
 * @property string|null $billing_menu_cap
 * @property string|null $pos_menu_cap
 * @property int|null $allow_access_self_amount
 * @property int|null $allow_access_pay_by_amount
 * @property int|null $oe_allow_change_price
 * @property int|null $oe_allow_change_disc
 * @property int|null $oe_show_price_column
 * @property int|null $oe_show_disc_column
 * @property int|null $oe_show_tax_column
 * @property int|null $oe_show_total_amount_column
 * @property int|null $oe_show_self_amount_column
 * @property int|null $oe_show_pay_by_amount_column
 * @property int|null $oe_allow_change_self_amount
 * @property int|null $oe_allow_change_payby_amount
 * @property int|null $oe_allow_change_med_status
 * @property int|null $oe_allow_change_uom
 * @property int|null $exam_tab
 * @property int|null $built_in
 * @property int|null $custom_form_id
 * @property int|null $oe_allow_folio_correction
 * @property int|null $oe_allow_change_pay_by
 * @property int|null $oe_allow_change_reg_status
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtGroup[] $scrtGroups
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ScrtPolicyData[] $scrtPolicyDatas
 * @property ScrtPolicyMod[] $scrtPolicyMods
 * @property ScrtUser[] $scrtUsers
 * @property ScrtUser[] $scrtUsers0
 */
class ScrtPolicy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_policy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id'], 'required'],
            [['policy_id', 'login_option', 'full_access_module', 'allow_access_self_amount', 'allow_access_pay_by_amount', 'oe_allow_change_price', 'oe_allow_change_disc', 'oe_show_price_column', 'oe_show_disc_column', 'oe_show_tax_column', 'oe_show_total_amount_column', 'oe_show_self_amount_column', 'oe_show_pay_by_amount_column', 'oe_allow_change_self_amount', 'oe_allow_change_payby_amount', 'oe_allow_change_med_status', 'oe_allow_change_uom', 'exam_tab', 'built_in', 'custom_form_id', 'oe_allow_folio_correction', 'oe_allow_change_pay_by', 'oe_allow_change_reg_status', 'created_user_id', 'modified_user_id'], 'integer'],
            [['notes'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['policy_name', 'reg_menu_cap', 'order_menu_cap', 'billing_menu_cap', 'pos_menu_cap'], 'string', 'max' => 30],
            [['policy_id'], 'unique'],
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
            'policy_id' => 'Policy ID',
            'policy_name' => 'Policy Name',
            'notes' => 'Notes',
            'login_option' => 'Login Option',
            'full_access_module' => 'Full Access Module',
            'reg_menu_cap' => 'Reg Menu Cap',
            'order_menu_cap' => 'Order Menu Cap',
            'billing_menu_cap' => 'Billing Menu Cap',
            'pos_menu_cap' => 'Pos Menu Cap',
            'allow_access_self_amount' => 'Allow Access Self Amount',
            'allow_access_pay_by_amount' => 'Allow Access Pay By Amount',
            'oe_allow_change_price' => 'Oe Allow Change Price',
            'oe_allow_change_disc' => 'Oe Allow Change Disc',
            'oe_show_price_column' => 'Oe Show Price Column',
            'oe_show_disc_column' => 'Oe Show Disc Column',
            'oe_show_tax_column' => 'Oe Show Tax Column',
            'oe_show_total_amount_column' => 'Oe Show Total Amount Column',
            'oe_show_self_amount_column' => 'Oe Show Self Amount Column',
            'oe_show_pay_by_amount_column' => 'Oe Show Pay By Amount Column',
            'oe_allow_change_self_amount' => 'Oe Allow Change Self Amount',
            'oe_allow_change_payby_amount' => 'Oe Allow Change Payby Amount',
            'oe_allow_change_med_status' => 'Oe Allow Change Med Status',
            'oe_allow_change_uom' => 'Oe Allow Change Uom',
            'exam_tab' => 'Exam Tab',
            'built_in' => 'Built In',
            'custom_form_id' => 'Custom Form ID',
            'oe_allow_folio_correction' => 'Oe Allow Folio Correction',
            'oe_allow_change_pay_by' => 'Oe Allow Change Pay By',
            'oe_allow_change_reg_status' => 'Oe Allow Change Reg Status',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ScrtGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtGroups()
    {
        return $this->hasMany(ScrtGroup::className(), ['policy_id' => 'policy_id']);
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
     * Gets query for [[ScrtPolicyDatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtPolicyDatas()
    {
        return $this->hasMany(ScrtPolicyData::className(), ['policy_id' => 'policy_id']);
    }

    /**
     * Gets query for [[ScrtPolicyMods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtPolicyMods()
    {
        return $this->hasMany(ScrtPolicyMod::className(), ['policy_id' => 'policy_id']);
    }

    /**
     * Gets query for [[ScrtUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtUsers()
    {
        return $this->hasMany(ScrtUser::className(), ['policy_id' => 'policy_id']);
    }

    /**
     * Gets query for [[ScrtUsers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScrtUsers0()
    {
        return $this->hasMany(ScrtUser::className(), ['policy_id' => 'policy_id']);
    }
}
