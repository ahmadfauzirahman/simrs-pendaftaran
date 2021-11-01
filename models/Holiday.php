<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "holiday".
 *
 * @property int $holiday_id
 * @property string|null $holiday_start_date
 * @property string|null $holiday_end_date
 * @property string|null $holiday_desc
 */
class Holiday extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'holiday';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['holiday_start_date', 'holiday_end_date'], 'safe'],
            [['holiday_desc'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'holiday_id' => 'Holiday ID',
            'holiday_start_date' => 'Holiday Start Date',
            'holiday_end_date' => 'Holiday End Date',
            'holiday_desc' => 'Holiday Desc',
        ];
    }
}
