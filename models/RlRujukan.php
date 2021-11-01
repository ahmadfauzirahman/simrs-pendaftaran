<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rl_rujukan".
 *
 * @property int $service_id
 * @property string|null $service_name
 * @property int|null $unit_id
 */
class RlRujukan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rl_rujukan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id'], 'required'],
            [['service_id', 'unit_id'], 'integer'],
            [['service_name'], 'string', 'max' => 100],
            [['service_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'service_name' => 'Service Name',
            'unit_id' => 'Unit ID',
        ];
    }
}
