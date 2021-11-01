<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_policy_login".
 *
 * @property int $policy_id
 * @property int $seq
 * @property int|null $login_day
 * @property string|null $login_time
 */
class ScrtPolicyLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_policy_login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'seq'], 'required'],
            [['policy_id', 'seq', 'login_day'], 'integer'],
            [['login_time'], 'safe'],
            [['policy_id', 'seq'], 'unique', 'targetAttribute' => ['policy_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'policy_id' => 'Policy ID',
            'seq' => 'Seq',
            'login_day' => 'Login Day',
            'login_time' => 'Login Time',
        ];
    }
}
