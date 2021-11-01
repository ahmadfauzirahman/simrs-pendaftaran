<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mreceipt_mtl".
 *
 * @property int $receipt_id
 * @property int $seq
 * @property int|null $material_item_id
 * @property float|null $qty_used
 *
 * @property Item $materialItem
 * @property Mreceipt $receipt
 */
class MreceiptMtl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mreceipt_mtl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'seq'], 'required'],
            [['receipt_id', 'seq', 'material_item_id'], 'integer'],
            [['qty_used'], 'number'],
            [['receipt_id', 'seq'], 'unique', 'targetAttribute' => ['receipt_id', 'seq']],
            [['material_item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['material_item_id' => 'item_id']],
            [['receipt_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mreceipt::className(), 'targetAttribute' => ['receipt_id' => 'receipt_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'receipt_id' => 'Receipt ID',
            'seq' => 'Seq',
            'material_item_id' => 'Material Item ID',
            'qty_used' => 'Qty Used',
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
     * Gets query for [[Receipt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReceipt()
    {
        return $this->hasOne(Mreceipt::className(), ['receipt_id' => 'receipt_id']);
    }
}
