<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "med_status".
 *
 * @property int $med_status_id
 * @property string|null $med_status_name
 * @property int|null $status_type
 * @property int|null $patient_condition
 * @property int|null $eklaim_status
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property FolioMedStatus[] $folioMedStatuses
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property UnitMedStatus[] $unitMedStatuses
 */
class MedStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'med_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_type', 'patient_condition', 'eklaim_status', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['med_status_name'], 'string', 'max' => 50],
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
            'med_status_id' => 'Med Status ID',
            'med_status_name' => 'Med Status Name',
            'status_type' => 'Status Type',
            'patient_condition' => 'Patient Condition',
            'eklaim_status' => 'Eklaim Status',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[FolioMedStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioMedStatuses()
    {
        return $this->hasMany(FolioMedStatus::className(), ['med_status_id' => 'med_status_id']);
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
     * Gets query for [[UnitMedStatuses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnitMedStatuses()
    {
        return $this->hasMany(UnitMedStatus::className(), ['med_status_id' => 'med_status_id']);
    }
}
