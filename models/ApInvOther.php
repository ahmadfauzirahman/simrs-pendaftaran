<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_inv_other".
 *
 * @property int $invoice_id
 * @property int $seq
 * @property string|null $source_1
 * @property string|null $source_2
 * @property string|null $source_3
 * @property string|null $item_name
 * @property string|null $description
 * @property float|null $quantity
 * @property string|null $uom
 * @property float|null $unit_price
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property int|null $staff_id
 *
 * @property ApInv $invoice
 */
class ApInvOther extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_inv_other';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'seq'], 'required'],
            [['invoice_id', 'seq', 'staff_id'], 'integer'],
            [['quantity', 'unit_price', 'disc_pc', 'disc_amount'], 'number'],
            [['source_1', 'source_2', 'source_3'], 'string', 'max' => 100],
            [['item_name'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 250],
            [['uom'], 'string', 'max' => 5],
            [['invoice_id', 'seq'], 'unique', 'targetAttribute' => ['invoice_id', 'seq']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'invoice_id' => 'Invoice ID',
            'seq' => 'Seq',
            'source_1' => 'Source 1',
            'source_2' => 'Source 2',
            'source_3' => 'Source 3',
            'item_name' => 'Item Name',
            'description' => 'Description',
            'quantity' => 'Quantity',
            'uom' => 'Uom',
            'unit_price' => 'Unit Price',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'staff_id' => 'Staff ID',
        ];
    }

    /**
     * Gets query for [[Invoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(ApInv::className(), ['invoice_id' => 'invoice_id']);
    }
}
