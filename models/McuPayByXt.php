<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu_pay_by_xt".
 *
 * @property int $pay_by_id
 * @property string|null $pay_by_name
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property McuExt[] $mcuExts
 */
class McuPayByXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu_pay_by_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disabled', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['pay_by_name'], 'string', 'max' => 100],
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
     * Gets query for [[McuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuExts()
    {
        return $this->hasMany(McuExt::className(), ['customer_id' => 'pay_by_id']);
    }
}
