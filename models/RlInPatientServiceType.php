<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rl_in_patient_service_type".
 *
 * @property int $server_id
 * @property string|null $server_name
 */
class RlInPatientServiceType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rl_in_patient_service_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['server_id'], 'required'],
            [['server_id'], 'integer'],
            [['server_name'], 'string', 'max' => 100],
            [['server_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'server_id' => 'Server ID',
            'server_name' => 'Server Name',
        ];
    }
}
