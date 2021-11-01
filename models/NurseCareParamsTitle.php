<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_care_params_title".
 *
 * @property int $nurse_care_param_id
 * @property string|null $report_title
 * @property string|null $report_title_en
 */
class NurseCareParamsTitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nurse_care_params_title';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id'], 'required'],
            [['nurse_care_param_id'], 'integer'],
            [['report_title', 'report_title_en'], 'string', 'max' => 100],
            [['nurse_care_param_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nurse_care_param_id' => 'Nurse Care Param ID',
            'report_title' => 'Report Title',
            'report_title_en' => 'Report Title En',
        ];
    }
}
