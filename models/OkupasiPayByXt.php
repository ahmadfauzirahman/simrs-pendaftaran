<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_pay_by_xt".
 *
 * @property int $pay_by_id
 * @property string|null $pay_by_name
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property ScrtUser $createdUser
 * @property OkupasiXt[] $okupasiXts
 */
class OkupasiPayByXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_pay_by_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disabled', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['pay_by_name'], 'string', 'max' => 60],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_by_id' => 'Pay By ID',
            'pay_by_name' => 'Pay By Name',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
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
     * Gets query for [[OkupasiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiXts()
    {
        return $this->hasMany(OkupasiXt::className(), ['pay_by_id' => 'pay_by_id']);
    }
}
