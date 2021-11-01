<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_query".
 *
 * @property int $report_id
 * @property int $query_id
 * @property string|null $query_name
 * @property string|null $sql_syntax
 * @property int|null $master_query_id
 *
 * @property Report $report
 */
class ReportQuery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_query';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'query_id'], 'required'],
            [['report_id', 'query_id', 'master_query_id'], 'integer'],
            [['sql_syntax'], 'string'],
            [['query_name'], 'string', 'max' => 30],
            [['report_id', 'query_id'], 'unique', 'targetAttribute' => ['report_id', 'query_id']],
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
            'query_id' => 'Query ID',
            'query_name' => 'Query Name',
            'sql_syntax' => 'Sql Syntax',
            'master_query_id' => 'Master Query ID',
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
