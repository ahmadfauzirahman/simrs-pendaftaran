<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam_ref_value".
 *
 * @property int $exam_id
 * @property int $seq
 * @property int|null $sex
 * @property int|null $age_range1
 * @property int|null $age_range2
 * @property int|null $age_unit
 * @property string|null $operator1
 * @property float|null $value1
 * @property string|null $conj
 * @property string|null $operator2
 * @property float|null $value2
 * @property int|null $plusmin
 * @property string|null $reference_value
 * @property string|null $description
 *
 * @property Exam $exam
 */
class ExamRefValue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam_ref_value';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exam_id', 'seq'], 'required'],
            [['exam_id', 'seq', 'sex', 'age_range1', 'age_range2', 'age_unit', 'plusmin'], 'integer'],
            [['value1', 'value2'], 'number'],
            [['reference_value'], 'string'],
            [['operator1', 'conj', 'operator2'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 500],
            [['exam_id', 'seq'], 'unique', 'targetAttribute' => ['exam_id', 'seq']],
            [['exam_id'], 'exist', 'skipOnError' => true, 'targetClass' => Exam::className(), 'targetAttribute' => ['exam_id' => 'exam_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'exam_id' => 'Exam ID',
            'seq' => 'Seq',
            'sex' => 'Sex',
            'age_range1' => 'Age Range1',
            'age_range2' => 'Age Range2',
            'age_unit' => 'Age Unit',
            'operator1' => 'Operator1',
            'value1' => 'Value1',
            'conj' => 'Conj',
            'operator2' => 'Operator2',
            'value2' => 'Value2',
            'plusmin' => 'Plusmin',
            'reference_value' => 'Reference Value',
            'description' => 'Description',
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
