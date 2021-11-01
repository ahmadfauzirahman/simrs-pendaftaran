<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test_php".
 *
 * @property int $test_php_id
 * @property string|null $test_php_name
 * @property string|null $test_php_url
 * @property string|null $test_php_descr
 * @property resource|null $image
 */
class TestPhp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_php';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image'], 'string'],
            [['test_php_name'], 'string', 'max' => 50],
            [['test_php_url'], 'string', 'max' => 250],
            [['test_php_descr'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'test_php_id' => 'Test Php ID',
            'test_php_name' => 'Test Php Name',
            'test_php_url' => 'Test Php Url',
            'test_php_descr' => 'Test Php Descr',
            'image' => 'Image',
        ];
    }
}
