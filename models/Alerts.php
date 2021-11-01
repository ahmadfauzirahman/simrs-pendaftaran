<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alerts".
 *
 * @property int $alert_id
 * @property int|null $report_id
 * @property string $alert_name
 * @property string|null $alert_table
 * @property string|null $detail_alert_table
 * @property string|null $detail_alert_field_name
 * @property int|null $detail_alert_field_no
 * @property int|null $alert_auto_width
 * @property int|null $detail_alert_auto_width
 * @property string|null $alert_description
 * @property int|null $show_in_detail
 * @property int|null $show_params
 */
class Alerts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alerts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alert_id', 'alert_name'], 'required'],
            [['alert_id', 'report_id', 'detail_alert_field_no', 'alert_auto_width', 'detail_alert_auto_width', 'show_in_detail', 'show_params'], 'integer'],
            [['alert_description'], 'string'],
            [['alert_name'], 'string', 'max' => 100],
            [['alert_table', 'detail_alert_table'], 'string', 'max' => 50],
            [['detail_alert_field_name'], 'string', 'max' => 20],
            [['alert_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'alert_id' => 'Alert ID',
            'report_id' => 'Report ID',
            'alert_name' => 'Alert Name',
            'alert_table' => 'Alert Table',
            'detail_alert_table' => 'Detail Alert Table',
            'detail_alert_field_name' => 'Detail Alert Field Name',
            'detail_alert_field_no' => 'Detail Alert Field No',
            'alert_auto_width' => 'Alert Auto Width',
            'detail_alert_auto_width' => 'Detail Alert Auto Width',
            'alert_description' => 'Alert Description',
            'show_in_detail' => 'Show In Detail',
            'show_params' => 'Show Params',
        ];
    }
}
