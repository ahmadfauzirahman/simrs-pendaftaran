<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "service_ext_dat".
 *
 * @property int $service_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $quantity
 * @property string|null $uom
 * @property float|null $price
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property float|null $amount
 *
 * @property ServiceExt $service
 */
class ServiceExtDat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'service_ext_dat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'seq'], 'required'],
            [['service_id', 'seq', 'item_id'], 'integer'],
            [['quantity', 'price', 'disc_pc', 'disc_amount', 'amount'], 'number'],
            [['uom'], 'string', 'max' => 40],
            [['service_id', 'seq'], 'unique', 'targetAttribute' => ['service_id', 'seq']],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => ServiceExt::className(), 'targetAttribute' => ['service_id' => 'service_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'service_id' => 'Service ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'uom' => 'Uom',
            'price' => 'Price',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'amount' => 'Amount',
        ];
    }

    /**
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(ServiceExt::className(), ['service_id' => 'service_id']);
    }
}
