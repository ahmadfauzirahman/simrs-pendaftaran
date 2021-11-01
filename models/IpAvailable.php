<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ip_available".
 *
 * @property string $act_date
 * @property int|null $unit_id
 * @property string|null $unit_name
 * @property int|null $bed_available
 */
class IpAvailable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ip_available';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['act_date'], 'required'],
            [['act_date'], 'safe'],
            [['unit_id', 'bed_available'], 'integer'],
            [['unit_name'], 'string', 'max' => 50],
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
            'unit_name' => 'Unit Name',
            'bed_available' => 'Bed Available',
        ];
    }
}
