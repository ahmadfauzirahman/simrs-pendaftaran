<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_ext".
 *
 * @property int $item_id
 * @property string|null $item_no
 * @property string|null $item_name
 * @property string|null $description
 * @property int|null $item_header
 * @property float|null $unit_price
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ItemHeaderExt $itemHeader
 */
class ItemExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'item_header', 'created_user_id', 'modified_user_id'], 'integer'],
            [['unit_price'], 'number'],
            [['created_time', 'modified_time'], 'safe'],
            [['item_no'], 'string', 'max' => 20],
            [['item_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 50],
            [['item_name'], 'unique'],
            [['item_no'], 'unique'],
            [['item_id'], 'unique'],
            [['item_header'], 'exist', 'skipOnError' => true, 'targetClass' => ItemHeaderExt::className(), 'targetAttribute' => ['item_header' => 'item_header_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'item_no' => 'Item No',
            'item_name' => 'Item Name',
            'description' => 'Description',
            'item_header' => 'Item Header',
            'unit_price' => 'Unit Price',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ItemHeader]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemHeader()
    {
        return $this->hasOne(ItemHeaderExt::className(), ['item_header_id' => 'item_header']);
    }
}
