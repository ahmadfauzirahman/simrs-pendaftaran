<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketing_card_patient_ext".
 *
 * @property int $card_id
 * @property int $patient_id
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property MarketingCardExt $card
 * @property Patient $patient
 */
class MarketingCardPatientExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketing_card_patient_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_id', 'patient_id'], 'required'],
            [['card_id', 'patient_id', 'created_user_id'], 'integer'],
            [['notes'], 'string'],
            [['created_time'], 'safe'],
            [['card_id', 'patient_id'], 'unique', 'targetAttribute' => ['card_id', 'patient_id']],
            [['card_id'], 'exist', 'skipOnError' => true, 'targetClass' => MarketingCardExt::className(), 'targetAttribute' => ['card_id' => 'card_id']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'card_id' => 'Card ID',
            'patient_id' => 'Patient ID',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Card]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCard()
    {
        return $this->hasOne(MarketingCardExt::className(), ['card_id' => 'card_id']);
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
}
