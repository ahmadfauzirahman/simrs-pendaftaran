<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_item_mtl".
 *
 * @property int $item_id
 * @property int $seq
 * @property int|null $material_item_id
 * @property float|null $quantity
 * @property float|null $waste_pc
 * @property string|null $uom
 * @property int|null $staff_id
 */
class NItemMtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_item_mtl';
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
}
