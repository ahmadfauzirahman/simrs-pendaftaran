<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "black_list_history".
 *
 * @property int $black_list_id
 * @property int|null $patient_id
 * @property int|null $user_id
 * @property string|null $reason
 * @property string|null $changed_at
 */
class BlackListHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'black_list_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'user_id'], 'integer'],
            [['changed_at'], 'safe'],
            [['reason'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'black_list_id' => 'Black List ID',
            'patient_id' => 'Patient ID',
            'user_id' => 'User ID',
            'reason' => 'Reason',
            'changed_at' => 'Changed At',
        ];
    }
}
