<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_care_values".
 *
 * @property int $nurse_care_param_id
 * @property int $seq
 * @property int $value_seq
 * @property string|null $value
 * @property string|null $value_en
 * @property int|null $show_detail
 */
class NurseCareValues extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nurse_care_values';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id', 'seq', 'value_seq'], 'required'],
            [['nurse_care_param_id', 'seq', 'value_seq', 'show_detail'], 'integer'],
            [['value', 'value_en'], 'string', 'max' => 250],
            [['nurse_care_param_id', 'seq', 'value_seq'], 'unique', 'targetAttribute' => ['nurse_care_param_id', 'seq', 'value_seq']],
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
            'value_seq' => 'Value Seq',
            'value' => 'Value',
            'value_en' => 'Value En',
            'show_detail' => 'Show Detail',
        ];
    }
}
