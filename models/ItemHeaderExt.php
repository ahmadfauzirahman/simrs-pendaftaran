<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_header_ext".
 *
 * @property int $item_header_id
 * @property string|null $item_header_name
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ItemExt[] $itemExts
 */
class ItemHeaderExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_header_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_header_id'], 'required'],
            [['item_header_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['notes'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['item_header_name'], 'string', 'max' => 50],
            [['item_header_name'], 'unique'],
            [['item_header_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_header_id' => 'Item Header ID',
            'item_header_name' => 'Item Header Name',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ItemExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemExts()
    {
        return $this->hasMany(ItemExt::className(), ['item_header' => 'item_header_id']);
    }
}
