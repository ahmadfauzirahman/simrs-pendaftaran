<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ncc_act_log".
 *
 * @property int $ncc_act_id
 * @property string $ncc_act_time
 * @property int $user_id
 * @property string|null $ip_address
 * @property string|null $comp_name
 * @property string $query_url
 * @property string $query_result
 */
class NccActLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ncc_act_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ncc_act_id', 'ncc_act_time', 'user_id', 'query_url', 'query_result'], 'required'],
            [['ncc_act_id', 'user_id'], 'integer'],
            [['ncc_act_time'], 'safe'],
            [['query_url', 'query_result'], 'string'],
            [['ip_address'], 'string', 'max' => 20],
            [['comp_name'], 'string', 'max' => 100],
            [['ncc_act_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ncc_act_id' => 'Ncc Act ID',
            'ncc_act_time' => 'Ncc Act Time',
            'user_id' => 'User ID',
            'ip_address' => 'Ip Address',
            'comp_name' => 'Comp Name',
            'query_url' => 'Query Url',
            'query_result' => 'Query Result',
        ];
    }
}
