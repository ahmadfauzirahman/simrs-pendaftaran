<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fstmt_acc".
 *
 * @property int $stmt_id
 * @property int $line_seq
 * @property string $account_from
 * @property string|null $account_to
 *
 * @property Fstmt $stmt
 */
class FstmtAcc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fstmt_acc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id', 'line_seq', 'account_from'], 'required'],
            [['stmt_id', 'line_seq'], 'integer'],
            [['account_from', 'account_to'], 'string', 'max' => 20],
            [['stmt_id', 'line_seq', 'account_from'], 'unique', 'targetAttribute' => ['stmt_id', 'line_seq', 'account_from']],
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
            'account_from' => 'Account From',
            'account_to' => 'Account To',
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
}
