<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_transfer_det".
 *
 * @property int $transfer_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $qty_requested
 * @property float|null $quantity
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $description
 * @property string|null $jenis_id
 *
 * @property NItem $item
 * @property NInvTransfer $transfer
 */
class NInvTransferDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_transfer_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transfer_id', 'seq'], 'required'],
            [['transfer_id', 'seq', 'item_id'], 'integer'],
            [['qty_requested', 'quantity', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 50],
            [['jenis_id'], 'string', 'max' => 1],
            [['transfer_id', 'seq'], 'unique', 'targetAttribute' => ['transfer_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItem::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['transfer_id'], 'exist', 'skipOnError' => true, 'targetClass' => NInvTransfer::className(), 'targetAttribute' => ['transfer_id' => 'transfer_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transfer_id' => 'Transfer ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'qty_requested' => 'Qty Requested',
            'quantity' => 'Quantity',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'description' => 'Description',
            'jenis_id' => 'Jenis ID',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(NItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Transfer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransfer()
    {
        return $this->hasOne(NInvTransfer::className(), ['transfer_id' => 'transfer_id']);
    }
}
