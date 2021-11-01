<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ven_balance".
 *
 * @property int $vendor_id
 * @property int $currency_id
 * @property float|null $balance
 *
 * @property Currency $currency
 * @property Vendor $vendor
 */
class VenBalance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ven_balance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id', 'currency_id'], 'required'],
            [['vendor_id', 'currency_id'], 'integer'],
            [['balance'], 'number'],
            [['vendor_id', 'currency_id'], 'unique', 'targetAttribute' => ['vendor_id', 'currency_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'vendor_id' => 'Vendor ID',
            'currency_id' => 'Currency ID',
            'balance' => 'Balance',
        ];
    }

    /**
     * Gets query for [[Currency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['currency_id' => 'currency_id']);
    }

    /**
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }
}
