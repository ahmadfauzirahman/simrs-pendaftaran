<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_act_log".
 *
 * @property int $bpjs_act_id
 * @property string $bpjs_act_time
 * @property int $user_id
 * @property string|null $ip_address
 * @property string|null $comp_name
 * @property string $query_url
 * @property string $query_result
 */
class BpjsActLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_act_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bpjs_act_time', 'user_id', 'query_url', 'query_result'], 'required'],
            [['bpjs_act_time'], 'safe'],
            [['user_id'], 'integer'],
            [['query_url', 'query_result'], 'string'],
            [['ip_address'], 'string', 'max' => 20],
            [['comp_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bpjs_act_id' => 'Bpjs Act ID',
            'bpjs_act_time' => 'Bpjs Act Time',
            'user_id' => 'User ID',
            'ip_address' => 'Ip Address',
            'comp_name' => 'Comp Name',
            'query_url' => 'Query Url',
            'query_result' => 'Query Result',
        ];
    }
}
