<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_param".
 *
 * @property int $report_id
 * @property int $param_id
 * @property string|null $param_name
 * @property string|null $param_caption
 * @property int|null $control_id
 * @property string|null $default_value
 * @property int|null $order_seq
 *
 * @property Report $report
 */
class ReportParam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_param';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'param_id'], 'required'],
            [['report_id', 'param_id', 'control_id', 'order_seq'], 'integer'],
            [['param_name', 'default_value'], 'string', 'max' => 30],
            [['param_caption'], 'string', 'max' => 60],
            [['report_id', 'param_id'], 'unique', 'targetAttribute' => ['report_id', 'param_id']],
            [['report_id'], 'exist', 'skipOnError' => true, 'targetClass' => Report::className(), 'targetAttribute' => ['report_id' => 'report_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'report_id' => 'Report ID',
            'param_id' => 'Param ID',
            'param_name' => 'Param Name',
            'param_caption' => 'Param Caption',
            'control_id' => 'Control ID',
            'default_value' => 'Default Value',
            'order_seq' => 'Order Seq',
        ];
    }

    /**
     * Gets query for [[Report]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReport()
    {
        return $this->hasOne(Report::className(), ['report_id' => 'report_id']);
    }
}
