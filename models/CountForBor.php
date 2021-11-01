<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "count_for_bor".
 *
 * @property string $progress_date
 * @property int $total_of_patient
 * @property int $total_of_bed
 */
class CountForBor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'count_for_bor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['progress_date', 'total_of_patient', 'total_of_bed'], 'required'],
            [['progress_date'], 'safe'],
            [['total_of_patient', 'total_of_bed'], 'integer'],
            [['progress_date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'progress_date' => 'Progress Date',
            'total_of_patient' => 'Total Of Patient',
            'total_of_bed' => 'Total Of Bed',
        ];
    }
}
