<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "object".
 *
 * @property int $object_id
 * @property string $object_no
 * @property string $object_name
 * @property int|null $object_link_id
 * @property int|null $object_group_id
 *
 * @property ObjectGroup $objectGroup
 */
class Object extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'object';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_id', 'object_no', 'object_name'], 'required'],
            [['object_id', 'object_link_id', 'object_group_id'], 'integer'],
            [['object_no'], 'string', 'max' => 20],
            [['object_name'], 'string', 'max' => 100],
            [['object_id'], 'unique'],
            [['object_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectGroup::className(), 'targetAttribute' => ['object_group_id' => 'object_group_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'object_id' => 'Object ID',
            'object_no' => 'Object No',
            'object_name' => 'Object Name',
            'object_link_id' => 'Object Link ID',
            'object_group_id' => 'Object Group ID',
        ];
    }

    /**
     * Gets query for [[ObjectGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObjectGroup()
    {
        return $this->hasOne(ObjectGroup::className(), ['object_group_id' => 'object_group_id']);
    }
}
