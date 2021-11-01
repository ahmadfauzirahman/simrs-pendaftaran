<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_wa_send_xt".
 *
 * @property int $reg_id
 * @property string|null $date_send
 * @property int|null $created_user_id
 * @property string|null $handphone
 *
 * @property Registration $reg
 */
class RegWaSendXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_wa_send_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'created_user_id'], 'integer'],
            [['date_send'], 'safe'],
            [['handphone'], 'string', 'max' => 30],
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
            'date_send' => 'Date Send',
            'created_user_id' => 'Created User ID',
            'handphone' => 'Handphone',
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
