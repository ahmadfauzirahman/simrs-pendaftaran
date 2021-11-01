<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "num_purch".
 *
 * @property int $numbering_id
 * @property string|null $numbering_name
 * @property string|null $description
 * @property int|null $min_number
 * @property int|null $max_number
 * @property int|null $next_number
 * @property string|null $format
 * @property int|null $reset_option
 * @property int|null $enable_reset
 * @property int|null $num_year
 * @property int|null $num_month
 * @property string|null $num_date
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class NumPurch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'num_purch';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['min_number', 'max_number', 'next_number', 'reset_option', 'enable_reset', 'num_year', 'num_month', 'created_user_id', 'modified_user_id'], 'integer'],
            [['num_date', 'created_time', 'modified_time'], 'safe'],
            [['numbering_name'], 'string', 'max' => 50],
            [['description', 'format'], 'string', 'max' => 100],
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
            'description' => 'Description',
            'min_number' => 'Min Number',
            'max_number' => 'Max Number',
            'next_number' => 'Next Number',
            'format' => 'Format',
            'reset_option' => 'Reset Option',
            'enable_reset' => 'Enable Reset',
            'num_year' => 'Num Year',
            'num_month' => 'Num Month',
            'num_date' => 'Num Date',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
