<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_preceipt_det".
 *
 * @property int $receipt_id
 * @property int $seq
 * @property int|null $item_id
 * @property int|null $order_id
 * @property int|null $order_seq
 * @property float|null $qty_received
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $remark
 * @property string|null $expiry_date
 * @property string|null $batch_no
 * @property int|null $original
 *
 * @property NItem $item
 * @property NPreceipt $receipt
 * @property NPorderDet $order
 */
class NPreceiptDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_preceipt_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'seq'], 'required'],
            [['receipt_id', 'seq', 'item_id', 'order_id', 'order_seq', 'original'], 'integer'],
            [['qty_received', 'uom_conversion'], 'number'],
            [['expiry_date'], 'safe'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['batch_no'], 'string', 'max' => 25],
            [['receipt_id', 'seq'], 'unique', 'targetAttribute' => ['receipt_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItem::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['receipt_id'], 'exist', 'skipOnError' => true, 'targetClass' => NPreceipt::className(), 'targetAttribute' => ['receipt_id' => 'receipt_id']],
            [['order_id', 'order_seq'], 'exist', 'skipOnError' => true, 'targetClass' => NPorderDet::className(), 'targetAttribute' => ['order_id' => 'order_id', 'order_seq' => 'seq']],
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
            'item_id' => 'Item ID',
            'order_id' => 'Order ID',
            'order_seq' => 'Order Seq',
            'qty_received' => 'Qty Received',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'remark' => 'Remark',
            'expiry_date' => 'Expiry Date',
            'batch_no' => 'Batch No',
            'original' => 'Original',
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
     * Gets query for [[Receipt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReceipt()
    {
        return $this->hasOne(NPreceipt::className(), ['receipt_id' => 'receipt_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(NPorderDet::className(), ['order_id' => 'order_id', 'seq' => 'order_seq']);
    }
}
