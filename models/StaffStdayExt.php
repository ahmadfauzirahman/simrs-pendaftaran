<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_stday_ext".
 *
 * @property int $id_day
 * @property string|null $day_name
 * @property string|null $day_name2
 */
class StaffStdayExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_stday_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_day'], 'required'],
            [['id_day'], 'integer'],
            [['day_name', 'day_name2'], 'string', 'max' => 15],
            [['id_day'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_day' => 'Id Day',
            'day_name' => 'Day Name',
            'day_name2' => 'Day Name2',
        ];
    }
}
