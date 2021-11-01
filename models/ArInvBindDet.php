<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_inv_bind_det".
 *
 * @property int $bind_id
 * @property int $seq
 * @property int|null $invoice_id
 * @property int|null $customer_reference
 *
 * @property ArInvBind $bind
 * @property ArInv $invoice
 */
class ArInvBindDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_inv_bind_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bind_id', 'seq'], 'required'],
            [['bind_id', 'seq', 'invoice_id', 'customer_reference'], 'integer'],
            [['bind_id', 'seq'], 'unique', 'targetAttribute' => ['bind_id', 'seq']],
            [['bind_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInvBind::className(), 'targetAttribute' => ['bind_id' => 'bind_id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bind_id' => 'Bind ID',
            'seq' => 'Seq',
            'invoice_id' => 'Invoice ID',
            'customer_reference' => 'Customer Reference',
        ];
    }

    /**
     * Gets query for [[Bind]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBind()
    {
        return $this->hasOne(ArInvBind::className(), ['bind_id' => 'bind_id']);
    }

    /**
     * Gets query for [[Invoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(ArInv::className(), ['invoice_id' => 'invoice_id']);
    }
}
