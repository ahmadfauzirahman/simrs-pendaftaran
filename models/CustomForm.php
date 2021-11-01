<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "custom_form".
 *
 * @property int $custom_form_id
 * @property string|null $custom_form_name
 * @property string|null $custom_form_description
 * @property string|null $custom_form_url
 * @property resource|null $image
 */
class CustomForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'custom_form';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['custom_form_id'], 'required'],
            [['custom_form_id'], 'integer'],
            [['image'], 'string'],
            [['custom_form_name'], 'string', 'max' => 50],
            [['custom_form_description'], 'string', 'max' => 100],
            [['custom_form_url'], 'string', 'max' => 250],
            [['custom_form_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'custom_form_id' => 'Custom Form ID',
            'custom_form_name' => 'Custom Form Name',
            'custom_form_description' => 'Custom Form Description',
            'custom_form_url' => 'Custom Form Url',
            'image' => 'Image',
        ];
    }
}
