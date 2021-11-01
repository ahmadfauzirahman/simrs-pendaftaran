<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_care_params_dept".
 *
 * @property int $nurse_care_param_id
 * @property int $seq
 * @property int|null $dept_id
 * @property int|null $unit_id
 * @property int|null $sub_unit_id
 */
class NurseCareParamsDept extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nurse_care_params_dept';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id', 'seq'], 'required'],
            [['nurse_care_param_id', 'seq', 'dept_id', 'unit_id', 'sub_unit_id'], 'integer'],
            [['nurse_care_param_id', 'seq'], 'unique', 'targetAttribute' => ['nurse_care_param_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nurse_care_param_id' => 'Nurse Care Param ID',
            'seq' => 'Seq',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
        ];
    }
}
