<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fstmt_line".
 *
 * @property int $stmt_id
 * @property int $line_seq
 * @property int|null $line_no
 * @property string|null $line_description
 * @property int|null $line_type
 * @property int|null $parent_line_seq
 * @property int|null $reverse
 * @property int|null $get_bal
 *
 * @property Fstmt $stmt
 * @property FstmtTotal[] $fstmtTotals
 */
class FstmtLine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fstmt_line';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id', 'line_seq'], 'required'],
            [['stmt_id', 'line_seq', 'line_no', 'line_type', 'parent_line_seq', 'reverse', 'get_bal'], 'integer'],
            [['line_description'], 'string', 'max' => 50],
            [['stmt_id', 'line_seq'], 'unique', 'targetAttribute' => ['stmt_id', 'line_seq']],
            [['stmt_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fstmt::className(), 'targetAttribute' => ['stmt_id' => 'stmt_id']],
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
            'line_no' => 'Line No',
            'line_description' => 'Line Description',
            'line_type' => 'Line Type',
            'parent_line_seq' => 'Parent Line Seq',
            'reverse' => 'Reverse',
            'get_bal' => 'Get Bal',
        ];
    }

    /**
     * Gets query for [[Stmt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStmt()
    {
        return $this->hasOne(Fstmt::className(), ['stmt_id' => 'stmt_id']);
    }

    /**
     * Gets query for [[FstmtTotals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFstmtTotals()
    {
        return $this->hasMany(FstmtTotal::className(), ['stmt_id' => 'stmt_id', 'line_seq' => 'line_seq']);
    }
}
