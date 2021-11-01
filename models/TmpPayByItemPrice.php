<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tmp_pay_by_item_price".
 *
 * @property int|null $seq
 * @property int|null $item_id
 * @property float|null $price
 */
class TmpPayByItemPrice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_pay_by_item_price';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['seq', 'item_id'], 'integer'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'price' => 'Price',
        ];
    }
}
