<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fstmt_total".
 *
 * @property int $stmt_id
 * @property int $line_seq
 * @property int $total_line_seq
 *
 * @property FstmtLine $stmt
 */
class FstmtTotal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fstmt_total';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id', 'line_seq', 'total_line_seq'], 'required'],
            [['stmt_id', 'line_seq', 'total_line_seq'], 'integer'],
            [['stmt_id', 'line_seq', 'total_line_seq'], 'unique', 'targetAttribute' => ['stmt_id', 'line_seq', 'total_line_seq']],
            [['stmt_id', 'line_seq'], 'exist', 'skipOnError' => true, 'targetClass' => FstmtLine::className(), 'targetAttribute' => ['stmt_id' => 'stmt_id', 'line_seq' => 'line_seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stmt_id' => 'Stmt ID',
            'line_seq' => 'Line Seq',
            'total_line_seq' => 'Total Line Seq',
        ];
    }

    /**
     * Gets query for [[Stmt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStmt()
    {
        return $this->hasOne(FstmtLine::className(), ['stmt_id' => 'stmt_id', 'line_seq' => 'line_seq']);
    }
}
