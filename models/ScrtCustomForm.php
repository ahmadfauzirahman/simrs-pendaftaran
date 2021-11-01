<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_custom_form".
 *
 * @property int $policy_id
 * @property int $custom_form_id
 */
class ScrtCustomForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_custom_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'custom_form_id'], 'required'],
            [['policy_id', 'custom_form_id'], 'integer'],
            [['policy_id', 'custom_form_id'], 'unique', 'targetAttribute' => ['policy_id', 'custom_form_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'policy_id' => 'Policy ID',
            'custom_form_id' => 'Custom Form ID',
        ];
    }
}
