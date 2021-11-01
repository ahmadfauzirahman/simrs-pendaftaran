<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_other_exam_doctor_notes".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $staff_id
 * @property string|null $notes
 *
 * @property Staff $staff
 */
class FolioOtherExamDoctorNotes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_other_exam_doctor_notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'staff_id'], 'integer'],
            [['notes'], 'string'],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
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
            'staff_id' => 'Staff ID',
            'notes' => 'Notes',
        ];
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'staff_id']);
    }
}
