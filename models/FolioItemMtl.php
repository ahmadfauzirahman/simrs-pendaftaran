<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_item_mtl".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int $material_seq
 * @property int $material_item_id
 * @property float|null $quantity
 * @property float|null $waste_pc
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property int|null $uom_id
 * @property float|null $unit_price
 * @property float|null $unit_discount
 * @property int|null $staff_id
 *
 * @property Folio $folio
 * @property Item $materialItem
 */
class FolioItemMtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_item_mtl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'material_seq', 'material_item_id'], 'required'],
            [['folio_id', 'seq', 'material_seq', 'material_item_id', 'uom_id', 'staff_id'], 'integer'],
            [['quantity', 'waste_pc', 'uom_conversion', 'unit_price', 'unit_discount'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['folio_id', 'seq', 'material_seq', 'material_item_id'], 'unique', 'targetAttribute' => ['folio_id', 'seq', 'material_seq', 'material_item_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['material_item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['material_item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'seq' => 'Seq',
            'material_seq' => 'Material Seq',
            'material_item_id' => 'Material Item ID',
            'quantity' => 'Quantity',
            'waste_pc' => 'Waste Pc',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'uom_id' => 'Uom ID',
            'unit_price' => 'Unit Price',
            'unit_discount' => 'Unit Discount',
            'staff_id' => 'Staff ID',
        ];
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
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
}
