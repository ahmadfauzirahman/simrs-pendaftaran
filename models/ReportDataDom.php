<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_data_dom".
 *
 * @property int $report_id
 * @property int $seq
 * @property string|null $domain_name
 * @property int|null $data_id
 * @property string|null $table_name
 */
class ReportDataDom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_data_dom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'seq'], 'required'],
            [['report_id', 'seq', 'data_id'], 'integer'],
            [['domain_name'], 'string', 'max' => 30],
            [['table_name'], 'string', 'max' => 100],
            [['report_id', 'seq'], 'unique', 'targetAttribute' => ['report_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'report_id' => 'Report ID',
            'seq' => 'Seq',
            'domain_name' => 'Domain Name',
            'data_id' => 'Data ID',
            'table_name' => 'Table Name',
        ];
    }
}
