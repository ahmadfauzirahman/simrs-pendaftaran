<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_item".
 *
 * @property int $exam_id
 * @property int $item_id
 *
 * @property Exam $exam
 * @property Item $item
 */
class ExamItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exam_id', 'item_id'], 'required'],
            [['exam_id', 'item_id'], 'integer'],
            [['exam_id', 'item_id'], 'unique', 'targetAttribute' => ['exam_id', 'item_id']],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exam::className(), 'targetAttribute' => ['exam_id' => 'exam_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'exam_id' => 'Exam ID',
            'item_id' => 'Item ID',
        ];
    }

    /**
     * Gets query for [[Exam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExam()
    {
        return $this->hasOne(Exam::className(), ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
    }
}
