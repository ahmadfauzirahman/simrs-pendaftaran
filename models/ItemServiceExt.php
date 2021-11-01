<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_service_ext".
 *
 * @property int $item_id
 * @property string|null $item_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $disabled
 */
class ItemServiceExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_service_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['item_name'], 'string', 'max' => 80],
            [['item_name'], 'unique'],
            [['item_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'item_name' => 'Item Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'disabled' => 'Disabled',
        ];
    }
}
