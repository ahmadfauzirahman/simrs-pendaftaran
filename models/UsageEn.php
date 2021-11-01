<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usage_en".
 *
 * @property string $usage
 * @property string|null $usage_english
 */
class UsageEn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usage_en';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usage'], 'required'],
            [['usage', 'usage_english'], 'string', 'max' => 150],
            [['usage'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usage' => 'Usage',
            'usage_english' => 'Usage English',
        ];
    }
}
