<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_care_params".
 *
 * @property int $nurse_care_param_id
 * @property int $seq
 * @property int|null $dept_id
 * @property int|null $unit_id
 * @property int|null $sub_unit_id
 * @property string $params
 * @property string|null $header
 * @property string|null $header_en
 * @property string|null $sub_header
 * @property string|null $sub_header_en
 * @property string|null $detail
 * @property string|null $detail_en
 * @property int|null $reverse
 */
class NurseCareParams extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nurse_care_params';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id', 'seq'], 'required'],
            [['nurse_care_param_id', 'seq', 'dept_id', 'unit_id', 'sub_unit_id', 'reverse'], 'integer'],
            [['params'], 'string', 'max' => 30],
            [['header', 'header_en', 'sub_header', 'sub_header_en', 'detail', 'detail_en'], 'string', 'max' => 50],
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
            'params' => 'Params',
            'header' => 'Header',
            'header_en' => 'Header En',
            'sub_header' => 'Sub Header',
            'sub_header_en' => 'Sub Header En',
            'detail' => 'Detail',
            'detail_en' => 'Detail En',
            'reverse' => 'Reverse',
        ];
    }
}
