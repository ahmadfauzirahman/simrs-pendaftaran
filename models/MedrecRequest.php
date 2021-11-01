<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medrec_request".
 *
 * @property int $mr_request_id
 * @property int|null $from_location_id
 * @property string|null $mr_request_date
 * @property int|null $folio_id
 * @property string|null $description
 * @property int|null $request_type
 * @property int|null $posted
 * @property string|null $mr_respond_date
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $status_patient
 * @property int|null $printed
 * @property int|null $bag
 * @property int|null $reg_id
 * @property string|null $return_date
 * @property int|null $return_user
 */
class MedrecRequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medrec_request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['from_location_id', 'folio_id', 'request_type', 'posted', 'created_user_id', 'modified_user_id', 'status_patient', 'printed', 'bag', 'reg_id', 'return_user'], 'integer'],
            [['mr_request_date', 'mr_respond_date', 'created_time', 'modified_time', 'return_date'], 'safe'],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mr_request_id' => 'Mr Request ID',
            'from_location_id' => 'From Location ID',
            'mr_request_date' => 'Mr Request Date',
            'folio_id' => 'Folio ID',
            'description' => 'Description',
            'request_type' => 'Request Type',
            'posted' => 'Posted',
            'mr_respond_date' => 'Mr Respond Date',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'status_patient' => 'Status Patient',
            'printed' => 'Printed',
            'bag' => 'Bag',
            'reg_id' => 'Reg ID',
            'return_date' => 'Return Date',
            'return_user' => 'Return User',
        ];
    }
}
