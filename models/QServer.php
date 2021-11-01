<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "q_server".
 *
 * @property int $q_server_id
 * @property string $q_server_name
 * @property string $q_server_display_name
 * @property string $q_server_display_short
 * @property int $q_server_no
 * @property int|null $q_server_color
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $user_name
 * @property string|null $last_update
 * @property string|null $ip_address
 * @property string|null $computer_name
 * @property int|null $status
 * @property int|null $registration_id
 * @property int|null $patient_id
 * @property string|null $queue_no
 * @property int|null $disabled
 */
class QServer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'q_server';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_server_name', 'q_server_display_name', 'q_server_display_short', 'q_server_no'], 'required'],
            [['q_server_no', 'q_server_color', 'created_user_id', 'modified_user_id', 'status', 'registration_id', 'patient_id', 'disabled'], 'integer'],
            [['created_time', 'modified_time', 'last_update'], 'safe'],
            [['q_server_name', 'computer_name'], 'string', 'max' => 50],
            [['q_server_display_name'], 'string', 'max' => 15],
            [['q_server_display_short'], 'string', 'max' => 3],
            [['user_name', 'ip_address', 'queue_no'], 'string', 'max' => 20],
            [['q_server_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'q_server_id' => 'Q Server ID',
            'q_server_name' => 'Q Server Name',
            'q_server_display_name' => 'Q Server Display Name',
            'q_server_display_short' => 'Q Server Display Short',
            'q_server_no' => 'Q Server No',
            'q_server_color' => 'Q Server Color',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'user_name' => 'User Name',
            'last_update' => 'Last Update',
            'ip_address' => 'Ip Address',
            'computer_name' => 'Computer Name',
            'status' => 'Status',
            'registration_id' => 'Registration ID',
            'patient_id' => 'Patient ID',
            'queue_no' => 'Queue No',
            'disabled' => 'Disabled',
        ];
    }
}
