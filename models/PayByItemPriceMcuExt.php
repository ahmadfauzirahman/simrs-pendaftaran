<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_by_item_price_mcu_ext".
 *
 * @property int $pay_by_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $price
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property PayBy $payBy
 * @property ItemMcuExt $item
 * @property ScrtUser $createdUser
 */
class PayByItemPriceMcuExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_by_item_price_mcu_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_id', 'seq'], 'required'],
            [['pay_by_id', 'seq', 'item_id', 'created_user_id'], 'integer'],
            [['price'], 'number'],
            [['created_time'], 'safe'],
            [['pay_by_id', 'item_id'], 'unique', 'targetAttribute' => ['pay_by_id', 'item_id']],
            [['pay_by_id', 'seq'], 'unique', 'targetAttribute' => ['pay_by_id', 'seq']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => PayBy::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemMcuExt::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
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
            'price' => 'Price',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
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
        return $this->hasOne(ItemMcuExt::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }
}
