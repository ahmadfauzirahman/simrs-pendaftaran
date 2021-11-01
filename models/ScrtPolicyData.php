<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_policy_data".
 *
 * @property int $policy_id
 * @property int $data_id
 * @property string|null $data_values
 *
 * @property ScrtPolicy $policy
 */
class ScrtPolicyData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_policy_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'data_id'], 'required'],
            [['policy_id', 'data_id'], 'integer'],
            [['data_values'], 'string', 'max' => 500],
            [['policy_id', 'data_id'], 'unique', 'targetAttribute' => ['policy_id', 'data_id']],
            [['policy_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtPolicy::className(), 'targetAttribute' => ['policy_id' => 'policy_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'policy_id' => 'Policy ID',
            'data_id' => 'Data ID',
            'data_values' => 'Data Values',
        ];
    }

    /**
     * Gets query for [[Policy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPolicy()
    {
        return $this->hasOne(ScrtPolicy::className(), ['policy_id' => 'policy_id']);
    }
}
