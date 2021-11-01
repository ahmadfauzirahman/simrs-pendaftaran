<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property int $mod_id
 * @property string|null $mod_name
 * @property string|null $description
 *
 * @property SubModule[] $subModules
 */
class Module extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['mod_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mod_id' => 'Mod ID',
            'mod_name' => 'Mod Name',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[SubModules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubModules()
    {
        return $this->hasMany(SubModule::className(), ['mod_id' => 'mod_id']);
    }
}
