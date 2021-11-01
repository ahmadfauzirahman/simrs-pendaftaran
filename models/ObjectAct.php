<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "object_act".
 *
 * @property int $act_id
 * @property string|null $act_time
 * @property int|null $station_id
 * @property int|null $object_id
 * @property int|null $act_function
 * @property string|null $act_data
 * @property string|null $station_ip_addr
 */
class ObjectAct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'object_act';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['act_time'], 'safe'],
            [['station_id', 'object_id', 'act_function'], 'integer'],
            [['act_data'], 'string'],
            [['station_ip_addr'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'act_id' => 'Act ID',
            'act_time' => 'Act Time',
            'station_id' => 'Station ID',
            'object_id' => 'Object ID',
            'act_function' => 'Act Function',
            'act_data' => 'Act Data',
            'station_ip_addr' => 'Station Ip Addr',
        ];
    }
}
