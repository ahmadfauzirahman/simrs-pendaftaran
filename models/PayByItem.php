<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_by_item".
 *
 * @property int $pay_by_id
 * @property int $seq
 * @property int|null $item_id
 *
 * @property PayBy $payBy
 * @property Item $item
 */
class PayByItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_by_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_id', 'seq'], 'required'],
            [['pay_by_id', 'seq', 'item_id'], 'integer'],
            [['item_id', 'pay_by_id'], 'unique', 'targetAttribute' => ['item_id', 'pay_by_id']],
            [['pay_by_id', 'seq'], 'unique', 'targetAttribute' => ['pay_by_id', 'seq']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_by_id' => 'Pay By ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
        ];
    }

    /**
     * Gets query for [[PayBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBy()
    {
        return $this->hasOne(PayBy::className(), ['pay_by_id' => 'pay_by_id']);
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
