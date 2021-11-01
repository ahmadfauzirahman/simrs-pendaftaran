<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_other_exam".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $exam_id
 * @property string|null $exam_value
 * @property string|null $exam_result
 * @property int|null $posted
 *
 * @property Exam $exam
 */
class FolioOtherExam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_other_exam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'exam_id', 'posted'], 'integer'],
            [['exam_result'], 'string'],
            [['exam_value'], 'string', 'max' => 20],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exam::className(), 'targetAttribute' => ['exam_id' => 'exam_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'seq' => 'Seq',
            'exam_id' => 'Exam ID',
            'exam_value' => 'Exam Value',
            'exam_result' => 'Exam Result',
            'posted' => 'Posted',
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
}
