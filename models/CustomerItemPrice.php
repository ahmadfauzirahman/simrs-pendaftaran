<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer_item_price".
 *
 * @property int $customer_id
 * @property int $seq
 * @property int $item_id
 * @property float|null $unit_price
 * @property float|null $unit_discount
 *
 * @property Customer $customer
 * @property Item $item
 */
class CustomerItemPrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_item_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'seq', 'item_id'], 'required'],
            [['customer_id', 'seq', 'item_id'], 'integer'],
            [['unit_price', 'unit_discount'], 'number'],
            [['customer_id', 'item_id'], 'unique', 'targetAttribute' => ['customer_id', 'item_id']],
            [['customer_id', 'seq'], 'unique', 'targetAttribute' => ['customer_id', 'seq']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'unit_price' => 'Unit Price',
            'unit_discount' => 'Unit Discount',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['customer_id' => 'customer_id']);
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
