<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_mod".
 *
 * @property int $mod_id
 * @property string|null $mod_name
 * @property string|null $standard_actions
 * @property string|null $add_actions
 * @property string|null $action_name
 * @property string|null $form_name
 * @property int|null $parent_mod_id
 * @property int|null $order_seq
 * @property string|null $notes
 * @property string|null $before_insert_url
 * @property string|null $after_insert_url
 * @property string|null $before_edit_url
 * @property string|null $after_edit_url
 * @property string|null $before_save_url
 * @property string|null $after_save_url
 * @property string|null $before_cancel_url
 * @property string|null $after_cancel_url
 * @property string|null $before_delete_url
 * @property string|null $after_delete_url
 * @property string|null $before_copy_url
 * @property string|null $after_copy_url
 * @property string|null $before_post_url
 * @property string|null $after_post_url
 * @property string|null $before_export_url
 * @property string|null $after_export_url
 * @property string|null $before_print_url
 * @property string|null $after_print_url
 * @property string|null $before_refresh_url
 * @property string|null $after_refresh_url
 * @property string|null $on_call_url
 * @property int|null $bi_x
 * @property int|null $bi_y
 * @property int|null $ai_x
 * @property int|null $ai_y
 * @property int|null $be_x
 * @property int|null $be_y
 * @property int|null $ae_x
 * @property int|null $ae_y
 * @property int|null $bs_x
 * @property int|null $bs_y
 * @property int|null $as_x
 * @property int|null $as_y
 * @property int|null $bc_x
 * @property int|null $bc_y
 * @property int|null $ac_x
 * @property int|null $ac_y
 * @property int|null $bd_x
 * @property int|null $bd_y
 * @property int|null $ad_x
 * @property int|null $ad_y
 * @property int|null $bo_x
 * @property int|null $bo_y
 * @property int|null $ao_x
 * @property int|null $ao_y
 * @property int|null $bp_x
 * @property int|null $bp_y
 * @property int|null $ap_x
 * @property int|null $ap_y
 * @property int|null $bx_x
 * @property int|null $bx_y
 * @property int|null $ax_x
 * @property int|null $ax_y
 * @property int|null $bt_x
 * @property int|null $bt_y
 * @property int|null $at_x
 * @property int|null $at_y
 * @property int|null $br_x
 * @property int|null $br_y
 * @property int|null $ar_x
 * @property int|null $ar_y
 * @property int|null $oc_x
 * @property int|null $oc_y
 */
class ScrtMod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_mod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mod_id'], 'required'],
            [['mod_id', 'parent_mod_id', 'order_seq', 'bi_x', 'bi_y', 'ai_x', 'ai_y', 'be_x', 'be_y', 'ae_x', 'ae_y', 'bs_x', 'bs_y', 'as_x', 'as_y', 'bc_x', 'bc_y', 'ac_x', 'ac_y', 'bd_x', 'bd_y', 'ad_x', 'ad_y', 'bo_x', 'bo_y', 'ao_x', 'ao_y', 'bp_x', 'bp_y', 'ap_x', 'ap_y', 'bx_x', 'bx_y', 'ax_x', 'ax_y', 'bt_x', 'bt_y', 'at_x', 'at_y', 'br_x', 'br_y', 'ar_x', 'ar_y', 'oc_x', 'oc_y'], 'integer'],
            [['notes'], 'string'],
            [['mod_name'], 'string', 'max' => 50],
            [['standard_actions', 'add_actions'], 'string', 'max' => 10],
            [['action_name', 'form_name'], 'string', 'max' => 30],
            [['before_insert_url', 'after_insert_url', 'before_edit_url', 'after_edit_url', 'before_save_url', 'after_save_url', 'before_cancel_url', 'after_cancel_url', 'before_delete_url', 'after_delete_url', 'before_copy_url', 'after_copy_url', 'before_post_url', 'after_post_url', 'before_export_url', 'after_export_url', 'before_print_url', 'after_print_url', 'before_refresh_url', 'after_refresh_url', 'on_call_url'], 'string', 'max' => 200],
            [['mod_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mod_id' => 'Mod ID',
            'mod_name' => 'Mod Name',
            'standard_actions' => 'Standard Actions',
            'add_actions' => 'Add Actions',
            'action_name' => 'Action Name',
            'form_name' => 'Form Name',
            'parent_mod_id' => 'Parent Mod ID',
            'order_seq' => 'Order Seq',
            'notes' => 'Notes',
            'before_insert_url' => 'Before Insert Url',
            'after_insert_url' => 'After Insert Url',
            'before_edit_url' => 'Before Edit Url',
            'after_edit_url' => 'After Edit Url',
            'before_save_url' => 'Before Save Url',
            'after_save_url' => 'After Save Url',
            'before_cancel_url' => 'Before Cancel Url',
            'after_cancel_url' => 'After Cancel Url',
            'before_delete_url' => 'Before Delete Url',
            'after_delete_url' => 'After Delete Url',
            'before_copy_url' => 'Before Copy Url',
            'after_copy_url' => 'After Copy Url',
            'before_post_url' => 'Before Post Url',
            'after_post_url' => 'After Post Url',
            'before_export_url' => 'Before Export Url',
            'after_export_url' => 'After Export Url',
            'before_print_url' => 'Before Print Url',
            'after_print_url' => 'After Print Url',
            'before_refresh_url' => 'Before Refresh Url',
            'after_refresh_url' => 'After Refresh Url',
            'on_call_url' => 'On Call Url',
            'bi_x' => 'Bi X',
            'bi_y' => 'Bi Y',
            'ai_x' => 'Ai X',
            'ai_y' => 'Ai Y',
            'be_x' => 'Be X',
            'be_y' => 'Be Y',
            'ae_x' => 'Ae X',
            'ae_y' => 'Ae Y',
            'bs_x' => 'Bs X',
            'bs_y' => 'Bs Y',
            'as_x' => 'As X',
            'as_y' => 'As Y',
            'bc_x' => 'Bc X',
            'bc_y' => 'Bc Y',
            'ac_x' => 'Ac X',
            'ac_y' => 'Ac Y',
            'bd_x' => 'Bd X',
            'bd_y' => 'Bd Y',
            'ad_x' => 'Ad X',
            'ad_y' => 'Ad Y',
            'bo_x' => 'Bo X',
            'bo_y' => 'Bo Y',
            'ao_x' => 'Ao X',
            'ao_y' => 'Ao Y',
            'bp_x' => 'Bp X',
            'bp_y' => 'Bp Y',
            'ap_x' => 'Ap X',
            'ap_y' => 'Ap Y',
            'bx_x' => 'Bx X',
            'bx_y' => 'Bx Y',
            'ax_x' => 'Ax X',
            'ax_y' => 'Ax Y',
            'bt_x' => 'Bt X',
            'bt_y' => 'Bt Y',
            'at_x' => 'At X',
            'at_y' => 'At Y',
            'br_x' => 'Br X',
            'br_y' => 'Br Y',
            'ar_x' => 'Ar X',
            'ar_y' => 'Ar Y',
            'oc_x' => 'Oc X',
            'oc_y' => 'Oc Y',
        ];
    }
}
