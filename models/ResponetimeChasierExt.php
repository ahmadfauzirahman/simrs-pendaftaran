<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "responetime_chasier_ext".
 *
 * @property int $reg_id
 * @property string|null $datetime_lo
 * @property string|null $datetime_adm
 * @property string|null $datetime_close
 * @property int|null $user_lo
 * @property int|null $user_adm
 * @property int|null $user_close
 * @property string|null $notes
 * @property int|null $modified_notes
 *
 * @property Registration $reg
 */
class ResponetimeChasierExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'responetime_chasier_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'user_lo', 'user_adm', 'user_close', 'modified_notes'], 'integer'],
            [['datetime_lo', 'datetime_adm', 'datetime_close'], 'safe'],
            [['notes'], 'string'],
            [['reg_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'datetime_lo' => 'Datetime Lo',
            'datetime_adm' => 'Datetime Adm',
            'datetime_close' => 'Datetime Close',
            'user_lo' => 'User Lo',
            'user_adm' => 'User Adm',
            'user_close' => 'User Close',
            'notes' => 'Notes',
            'modified_notes' => 'Modified Notes',
        ];
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
}
