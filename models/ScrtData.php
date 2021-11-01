<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_data".
 *
 * @property int $data_id
 * @property string|null $description
 * @property string|null $table_name
 * @property string|null $key_field
 * @property string|null $displayed_field
 * @property string|null $order_field
 * @property string|null $module
 */
class ScrtData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_id'], 'required'],
            [['data_id'], 'integer'],
            [['description', 'table_name', 'key_field'], 'string', 'max' => 30],
            [['displayed_field'], 'string', 'max' => 100],
            [['order_field', 'module'], 'string', 'max' => 20],
            [['data_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'data_id' => 'Data ID',
            'description' => 'Description',
            'table_name' => 'Table Name',
            'key_field' => 'Key Field',
            'displayed_field' => 'Displayed Field',
            'order_field' => 'Order Field',
            'module' => 'Module',
        ];
    }
}
