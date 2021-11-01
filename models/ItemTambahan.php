<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_tambahan".
 *
 * @property string $item_name
 * @property string|null $unit
 * @property float|null $last_price
 */
class ItemTambahan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_tambahan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_name'], 'required'],
            [['last_price'], 'number'],
            [['item_name'], 'string', 'max' => 50],
            [['unit'], 'string', 'max' => 5],
            [['item_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_name' => 'Item Name',
            'unit' => 'Unit',
            'last_price' => 'Last Price',
        ];
    }
}
