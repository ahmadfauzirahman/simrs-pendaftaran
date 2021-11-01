<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fstmt".
 *
 * @property int $stmt_id
 * @property int|null $column_format
 * @property int|null $report_id
 * @property int|null $use_location
 * @property int|null $get_bal
 *
 * @property Report $report
 * @property FstmtAcc[] $fstmtAccs
 * @property FstmtLine[] $fstmtLines
 */
class Fstmt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fstmt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id'], 'required'],
            [['stmt_id', 'column_format', 'report_id', 'use_location', 'get_bal'], 'integer'],
            [['stmt_id'], 'unique'],
            [['report_id'], 'exist', 'skipOnError' => true, 'targetClass' => Report::className(), 'targetAttribute' => ['report_id' => 'report_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stmt_id' => 'Stmt ID',
            'column_format' => 'Column Format',
            'report_id' => 'Report ID',
            'use_location' => 'Use Location',
            'get_bal' => 'Get Bal',
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

    /**
     * Gets query for [[FstmtAccs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFstmtAccs()
    {
        return $this->hasMany(FstmtAcc::className(), ['stmt_id' => 'stmt_id']);
    }

    /**
     * Gets query for [[FstmtLines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFstmtLines()
    {
        return $this->hasMany(FstmtLine::className(), ['stmt_id' => 'stmt_id']);
    }
}
