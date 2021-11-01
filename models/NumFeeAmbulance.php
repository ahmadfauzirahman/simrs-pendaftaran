<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "num_fee_ambulance".
 *
 * @property int $numbering_id
 * @property string|null $numbering_name
 * @property int|null $min_number
 * @property int|null $max_number
 * @property int|null $next_number
 * @property string|null $format
 * @property int|null $num_year
 * @property int|null $num_month
 * @property int|null $created_user_id
 * @property string|null $created_time
 */
class NumFeeAmbulance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'num_fee_ambulance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numbering_id'], 'required'],
            [['numbering_id', 'min_number', 'max_number', 'next_number', 'num_year', 'num_month', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['numbering_name'], 'string', 'max' => 50],
            [['format'], 'string', 'max' => 100],
            [['numbering_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'numbering_id' => 'Numbering ID',
            'numbering_name' => 'Numbering Name',
            'min_number' => 'Min Number',
            'max_number' => 'Max Number',
            'next_number' => 'Next Number',
            'format' => 'Format',
            'num_year' => 'Num Year',
            'num_month' => 'Num Month',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }
}
