<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_file_xt".
 *
 * @property int $patient_id
 * @property int $seq
 * @property string|null $notes
 * @property string|null $location
 * @property string|null $target
 * @property string|null $view_location
 * @property int|null $validation
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Patient $patient
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class OkupasiFileXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_file_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'seq'], 'required'],
            [['patient_id', 'seq', 'validation', 'created_user_id', 'modified_user_id'], 'integer'],
            [['notes', 'location', 'target', 'view_location'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['patient_id', 'seq'], 'unique', 'targetAttribute' => ['patient_id', 'seq']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
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
            'patient_id' => 'Patient ID',
            'seq' => 'Seq',
            'notes' => 'Notes',
            'location' => 'Location',
            'target' => 'Target',
            'view_location' => 'View Location',
            'validation' => 'Validation',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'patient_id']);
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
}
