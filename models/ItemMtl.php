<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_mtl".
 *
 * @property int $item_id
 * @property int $seq
 * @property int|null $material_item_id
 * @property float|null $quantity
 * @property float|null $waste_pc
 * @property string|null $uom
 * @property int|null $staff_id
 *
 * @property Item $materialItem
 * @property Item $item
 */
class ItemMtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_mtl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq'], 'required'],
            [['item_id', 'seq', 'material_item_id', 'staff_id'], 'integer'],
            [['quantity', 'waste_pc'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['item_id', 'seq'], 'unique', 'targetAttribute' => ['item_id', 'seq']],
            [['material_item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['material_item_id' => 'item_id']],
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
            'material_item_id' => 'Material Item ID',
            'quantity' => 'Quantity',
            'waste_pc' => 'Waste Pc',
            'uom' => 'Uom',
            'staff_id' => 'Staff ID',
        ];
    }

    /**
     * Gets query for [[MaterialItem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterialItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'material_item_id']);
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
