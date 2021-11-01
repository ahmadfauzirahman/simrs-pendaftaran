<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_param_ctl".
 *
 * @property int $control_id
 * @property string|null $group_name
 * @property string|null $description
 * @property string|null $control_name
 * @property string|null $data_type
 */
class ReportParamCtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_param_ctl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_name', 'description', 'control_name'], 'string', 'max' => 50],
            [['data_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'control_id' => 'Control ID',
            'group_name' => 'Group Name',
            'description' => 'Description',
            'control_name' => 'Control Name',
            'data_type' => 'Data Type',
        ];
    }
}
