<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "respone_time_poli_xt".
 *
 * @property int $respone_id
 * @property int|null $reg_id
 * @property int $folio_id
 * @property string|null $start_date
 * @property string|null $start_time
 * @property string|null $end_date
 * @property string|null $end_time
 * @property int|null $user_start
 * @property int|null $user_end
 *
 * @property Folio $folio
 * @property Registration $reg
 * @property ScrtUser $userEnd
 * @property ScrtUser $userStart
 */
class ResponeTimePoliXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'respone_time_poli_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'folio_id', 'user_start', 'user_end'], 'integer'],
            [['folio_id'], 'required'],
            [['start_date', 'start_time', 'end_date', 'end_time'], 'safe'],
            [['folio_id'], 'unique'],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
            [['user_end'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_end' => 'user_id']],
            [['user_start'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_start' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'respone_id' => 'Respone ID',
            'reg_id' => 'Reg ID',
            'folio_id' => 'Folio ID',
            'start_date' => 'Start Date',
            'start_time' => 'Start Time',
            'end_date' => 'End Date',
            'end_time' => 'End Time',
            'user_start' => 'User Start',
            'user_end' => 'User End',
        ];
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
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }

    /**
     * Gets query for [[UserEnd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserEnd()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_end']);
    }

    /**
     * Gets query for [[UserStart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserStart()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_start']);
    }
}
