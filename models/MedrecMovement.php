<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medrec_movement".
 *
 * @property int $medrec_movement_id
 * @property int|null $folio_id
 * @property int|null $registration_id
 * @property int|null $from_location_id
 * @property int|null $to_location_id
 * @property string|null $movement_date
 * @property int|null $posted_by_user_id
 */
class MedrecMovement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medrec_movement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'registration_id', 'from_location_id', 'to_location_id', 'posted_by_user_id'], 'integer'],
            [['movement_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'medrec_movement_id' => 'Medrec Movement ID',
            'folio_id' => 'Folio ID',
            'registration_id' => 'Registration ID',
            'from_location_id' => 'From Location ID',
            'to_location_id' => 'To Location ID',
            'movement_date' => 'Movement Date',
            'posted_by_user_id' => 'Posted By User ID',
        ];
    }
}
