<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_policy_mod".
 *
 * @property int $policy_id
 * @property int $mod_id
 * @property string|null $standard_actions
 * @property string|null $add_actions
 *
 * @property ScrtPolicy $policy
 */
class ScrtPolicyMod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_policy_mod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'mod_id'], 'required'],
            [['policy_id', 'mod_id'], 'integer'],
            [['standard_actions', 'add_actions'], 'string', 'max' => 10],
            [['policy_id', 'mod_id'], 'unique', 'targetAttribute' => ['policy_id', 'mod_id']],
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
            'mod_id' => 'Mod ID',
            'standard_actions' => 'Standard Actions',
            'add_actions' => 'Add Actions',
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
