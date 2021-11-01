<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wallpaper".
 *
 * @property int $wallpaper_id
 * @property string|null $wallpaper_name
 * @property string|null $picture
 * @property int|null $built_in
 */
class Wallpaper extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wallpaper';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['picture'], 'string'],
            [['built_in'], 'integer'],
            [['wallpaper_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'wallpaper_id' => 'Wallpaper ID',
            'wallpaper_name' => 'Wallpaper Name',
            'picture' => 'Picture',
            'built_in' => 'Built In',
        ];
    }
}
