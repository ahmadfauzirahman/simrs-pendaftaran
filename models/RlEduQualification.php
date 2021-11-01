<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rl_edu_qualification".
 *
 * @property int $order_seq
 * @property string|null $edu_qualification_id
 * @property string|null $edu_qualification_name
 */
class RlEduQualification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rl_edu_qualification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_seq'], 'required'],
            [['order_seq'], 'integer'],
            [['edu_qualification_id'], 'string', 'max' => 10],
            [['edu_qualification_name'], 'string', 'max' => 100],
            [['order_seq'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_seq' => 'Order Seq',
            'edu_qualification_id' => 'Edu Qualification ID',
            'edu_qualification_name' => 'Edu Qualification Name',
        ];
    }
}
