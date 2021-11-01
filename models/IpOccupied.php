<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ip_occupied".
 *
 * @property string $act_date
 * @property int|null $unit_id
 * @property int|null $cos_id
 * @property string|null $unit_name
 * @property string|null $cos_name
 * @property int|null $bed_occupied
 */
class IpOccupied extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ip_occupied';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['act_date'], 'required'],
            [['act_date'], 'safe'],
            [['unit_id', 'cos_id', 'bed_occupied'], 'integer'],
            [['unit_name', 'cos_name'], 'string', 'max' => 50],
            [['act_date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'act_date' => 'Act Date',
            'unit_id' => 'Unit ID',
            'cos_id' => 'Cos ID',
            'unit_name' => 'Unit Name',
            'cos_name' => 'Cos Name',
            'bed_occupied' => 'Bed Occupied',
        ];
    }
}
