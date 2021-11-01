<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_protect".
 *
 * @property int $report_id
 * @property string $protection
 *
 * @property Report $report
 */
class ReportProtect extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_protect';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'protection'], 'required'],
            [['report_id'], 'integer'],
            [['protection'], 'string', 'max' => 50],
            [['report_id'], 'unique'],
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
            'protection' => 'Protection',
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
