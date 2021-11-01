<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_online_xt".
 *
 * @property int $reg_id
 * @property string|null $date_post
 * @property int|null $created_user_id
 *
 * @property Registration $reg
 */
class RegOnlineXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_online_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'created_user_id'], 'integer'],
            [['date_post'], 'safe'],
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
            'date_post' => 'Date Post',
            'created_user_id' => 'Created User ID',
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
