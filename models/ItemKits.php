<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_kits".
 *
 * @property int $item_id
 * @property int $seq
 * @property int|null $kits_item_id
 * @property float|null $quantity
 * @property float|null $waste_pc
 * @property string|null $uom
 * @property float|null $unit_price
 * @property float|null $disc_pc
 *
 * @property Item $item
 */
class ItemKits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_kits';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq'], 'required'],
            [['item_id', 'seq', 'kits_item_id'], 'integer'],
            [['quantity', 'waste_pc', 'unit_price', 'disc_pc'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['item_id', 'seq'], 'unique', 'targetAttribute' => ['item_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'seq' => 'Seq',
            'kits_item_id' => 'Kits Item ID',
            'quantity' => 'Quantity',
            'waste_pc' => 'Waste Pc',
            'uom' => 'Uom',
            'unit_price' => 'Unit Price',
            'disc_pc' => 'Disc Pc',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
    }
}
