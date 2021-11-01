<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "exam".
 *
 * @property int $exam_id
 * @property string|null $exam_name
 * @property int|null $report_seq
 * @property string|null $exam_value
 * @property string|null $exam_method
 * @property string|null $int_ip_address
 * @property string|null $equipment_id
 * @property string|null $test_id
 * @property string|null $header_format
 * @property string|null $kategori1
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $exam_type
 * @property string|null $uom
 * @property int|null $item_id
 * @property string|null $exam_name_en
 * @property string|null $test_id_en
 * @property string|null $header_format_en
 * @property string|null $exam_result_m
 * @property string|null $exam_result_f
 * @property int|null $print_seq
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ExamItem[] $examItems
 * @property Item[] $items
 * @property ExamRefValue[] $examRefValues
 * @property FolioOtherExam[] $folioOtherExams
 * @property FolioPhysicalExam[] $folioPhysicalExams
 * @property UnitPhysicExam[] $unitPhysicExams
 */
class Exam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'exam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_seq', 'created_user_id', 'modified_user_id', 'exam_type', 'item_id', 'print_seq'], 'integer'],
            [['exam_value', 'exam_method', 'exam_result_m', 'exam_result_f'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['exam_name', 'exam_name_en'], 'string', 'max' => 60],
            [['int_ip_address'], 'string', 'max' => 16],
            [['equipment_id', 'test_id', 'test_id_en'], 'string', 'max' => 35],
            [['header_format', 'header_format_en'], 'string', 'max' => 256],
            [['kategori1'], 'string', 'max' => 50],
            [['uom'], 'string', 'max' => 20],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'exam_id' => 'Exam ID',
            'exam_name' => 'Exam Name',
            'report_seq' => 'Report Seq',
            'exam_value' => 'Exam Value',
            'exam_method' => 'Exam Method',
            'int_ip_address' => 'Int Ip Address',
            'equipment_id' => 'Equipment ID',
            'test_id' => 'Test ID',
            'header_format' => 'Header Format',
            'kategori1' => 'Kategori1',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'exam_type' => 'Exam Type',
            'uom' => 'Uom',
            'item_id' => 'Item ID',
            'exam_name_en' => 'Exam Name En',
            'test_id_en' => 'Test Id En',
            'header_format_en' => 'Header Format En',
            'exam_result_m' => 'Exam Result M',
            'exam_result_f' => 'Exam Result F',
            'print_seq' => 'Print Seq',
        ];
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[ExamItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExamItems()
    {
        return $this->hasMany(ExamItem::className(), ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('exam_item', ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[ExamRefValues]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExamRefValues()
    {
        return $this->hasMany(ExamRefValue::className(), ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[FolioOtherExams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioOtherExams()
    {
        return $this->hasMany(FolioOtherExam::className(), ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[FolioPhysicalExams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioPhysicalExams()
    {
        return $this->hasMany(FolioPhysicalExam::className(), ['exam_id' => 'exam_id']);
    }

    /**
     * Gets query for [[UnitPhysicExams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnitPhysicExams()
    {
        return $this->hasMany(UnitPhysicExam::className(), ['exam_id' => 'exam_id']);
    }
}
