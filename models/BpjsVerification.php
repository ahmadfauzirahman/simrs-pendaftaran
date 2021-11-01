<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_verification".
 *
 * @property string $user_name
 * @property string $request_time
 * @property int $seq
 * @property string $data
 * @property int|null $request_result
 * @property string|null $result
 * @property string|null $his
 */
class BpjsVerification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_verification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'request_time', 'seq', 'data'], 'required'],
            [['request_time'], 'safe'],
            [['seq', 'request_result'], 'integer'],
            [['user_name', 'data'], 'string', 'max' => 50],
            [['result', 'his'], 'string', 'max' => 100],
            [['user_name', 'request_time', 'seq'], 'unique', 'targetAttribute' => ['user_name', 'request_time', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_name' => 'User Name',
            'request_time' => 'Request Time',
            'seq' => 'Seq',
            'data' => 'Data',
            'request_result' => 'Request Result',
            'result' => 'Result',
            'his' => 'His',
        ];
    }
}
