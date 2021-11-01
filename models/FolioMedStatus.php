<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_med_status".
 *
 * @property int $history_id
 * @property string|null $module
 * @property int|null $user_id
 * @property string|null $user_name
 * @property int|null $folio_id
 * @property int|null $med_status_id
 * @property string|null $med_status_date
 *
 * @property ScrtUser $user
 * @property Folio $folio
 * @property MedStatus $medStatus
 * @property ScrtUser $userName
 */
class FolioMedStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_med_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'folio_id', 'med_status_id'], 'integer'],
            [['med_status_date'], 'safe'],
            [['module'], 'string', 'max' => 15],
            [['user_name'], 'string', 'max' => 30],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['med_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => MedStatus::className(), 'targetAttribute' => ['med_status_id' => 'med_status_id']],
            [['user_name'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_name' => 'user_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'history_id' => 'History ID',
            'module' => 'Module',
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'folio_id' => 'Folio ID',
            'med_status_id' => 'Med Status ID',
            'med_status_date' => 'Med Status Date',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[MedStatus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedStatus()
    {
        return $this->hasOne(MedStatus::className(), ['med_status_id' => 'med_status_id']);
    }

    /**
     * Gets query for [[UserName]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserName()
    {
        return $this->hasOne(ScrtUser::className(), ['user_name' => 'user_name']);
    }
}
