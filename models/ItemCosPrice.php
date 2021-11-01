<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_cos_price".
 *
 * @property int $item_id
 * @property int $cos_id
 * @property float|null $price
 * @property float|null $discount
 *
 * @property Cos $cos
 * @property Item $item
 */
class ItemCosPrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_cos_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'cos_id'], 'required'],
            [['item_id', 'cos_id'], 'integer'],
            [['price', 'discount'], 'number'],
            [['item_id', 'cos_id'], 'unique', 'targetAttribute' => ['item_id', 'cos_id']],
            [['cos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_id' => 'cos_id']],
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
            'cos_id' => 'Cos ID',
            'price' => 'Price',
            'discount' => 'Discount',
        ];
    }

    /**
     * Gets query for [[Cos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_id']);
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
