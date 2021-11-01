<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_setup".
 *
 * @property int $action_id
 * @property string|null $description
 * @property string $base_url
 * @property string $field_name
 */
class BpjsSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['action_id', 'base_url', 'field_name'], 'required'],
            [['action_id'], 'integer'],
            [['description', 'base_url'], 'string', 'max' => 255],
            [['field_name'], 'string', 'max' => 100],
            [['action_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'action_id' => 'Action ID',
            'description' => 'Description',
            'base_url' => 'Base Url',
            'field_name' => 'Field Name',
        ];
    }
}
