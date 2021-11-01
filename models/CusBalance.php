<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cus_balance".
 *
 * @property int $customer_id
 * @property int $currency_id
 * @property float|null $balance
 *
 * @property Customer $customer
 */
class CusBalance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cus_balance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'currency_id'], 'required'],
            [['customer_id', 'currency_id'], 'integer'],
            [['balance'], 'number'],
            [['customer_id', 'currency_id'], 'unique', 'targetAttribute' => ['customer_id', 'currency_id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'customer_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'currency_id' => 'Currency ID',
            'balance' => 'Balance',
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
}
