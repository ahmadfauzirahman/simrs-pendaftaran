<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_test_php".
 *
 * @property int $policy_id
 * @property int $test_php_id
 */
class ScrtTestPhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_test_php';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'test_php_id'], 'required'],
            [['policy_id', 'test_php_id'], 'integer'],
            [['policy_id', 'test_php_id'], 'unique', 'targetAttribute' => ['policy_id', 'test_php_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'policy_id' => 'Policy ID',
            'test_php_id' => 'Test Php ID',
        ];
    }
}
