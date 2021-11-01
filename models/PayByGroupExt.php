<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_by_group_ext".
 *
 * @property int $pay_by_group_id
 * @property string|null $pay_by_group_name
 */
class PayByGroupExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_by_group_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_group_id'], 'required'],
            [['pay_by_group_id'], 'integer'],
            [['pay_by_group_name'], 'string', 'max' => 30],
            [['pay_by_group_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_by_group_id' => 'Pay By Group ID',
            'pay_by_group_name' => 'Pay By Group Name',
        ];
    }
}
