<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_fee_criteria".
 *
 * @property int $staff_id
 * @property int $item_id
 * @property int $item_type_ide
 * @property int $item_group_id
 * @property int $dept_id
 * @property int $unit_id
 * @property int $sub_unit_id
 * @property int $service_cos_id
 * @property int $pay_by_id
 * @property int|null $changeto_account_id
 * @property float|null $share_dr_fixed
 * @property float|null $share_dr_pct
 */
class StaffFeeCriteria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_fee_criteria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'item_id', 'item_type_ide', 'item_group_id', 'dept_id', 'unit_id', 'sub_unit_id', 'service_cos_id', 'pay_by_id'], 'required'],
            [['staff_id', 'item_id', 'item_type_ide', 'item_group_id', 'dept_id', 'unit_id', 'sub_unit_id', 'service_cos_id', 'pay_by_id', 'changeto_account_id'], 'integer'],
            [['share_dr_fixed', 'share_dr_pct'], 'number'],
            [['staff_id', 'item_id', 'item_type_ide', 'item_group_id', 'dept_id', 'unit_id', 'sub_unit_id', 'service_cos_id', 'pay_by_id'], 'unique', 'targetAttribute' => ['staff_id', 'item_id', 'item_type_ide', 'item_group_id', 'dept_id', 'unit_id', 'sub_unit_id', 'service_cos_id', 'pay_by_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'item_id' => 'Item ID',
            'item_type_ide' => 'Item Type Ide',
            'item_group_id' => 'Item Group ID',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
            'service_cos_id' => 'Service Cos ID',
            'pay_by_id' => 'Pay By ID',
            'changeto_account_id' => 'Changeto Account ID',
            'share_dr_fixed' => 'Share Dr Fixed',
            'share_dr_pct' => 'Share Dr Pct',
        ];
    }
}
