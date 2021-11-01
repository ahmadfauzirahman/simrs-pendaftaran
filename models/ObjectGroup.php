<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "object_group".
 *
 * @property int $object_group_id
 * @property string $object_group_name
 *
 * @property Object[] $objects
 */
class ObjectGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'object_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_group_id', 'object_group_name'], 'required'],
            [['object_group_id'], 'integer'],
            [['object_group_name'], 'string', 'max' => 50],
            [['object_group_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'object_group_id' => 'Object Group ID',
            'object_group_name' => 'Object Group Name',
        ];
    }

    /**
     * Gets query for [[Objects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['object_group_id' => 'object_group_id']);
    }
}
