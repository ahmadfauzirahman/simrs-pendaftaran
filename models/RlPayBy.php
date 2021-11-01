<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rl_pay_by".
 *
 * @property string $pay_by_id
 * @property string|null $pay_by_name
 */
class RlPayBy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rl_pay_by';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_id'], 'required'],
            [['pay_by_id'], 'string', 'max' => 10],
            [['pay_by_name'], 'string', 'max' => 50],
            [['pay_by_id'], 'unique'],
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
        ];
    }
}
