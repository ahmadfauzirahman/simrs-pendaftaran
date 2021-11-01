<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_inv_bind_det".
 *
 * @property int $bind_id
 * @property int $seq
 * @property int|null $invoice_id
 *
 * @property ApInvBind $bind
 * @property ApInv $invoice
 */
class ApInvBindDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_inv_bind_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bind_id', 'seq'], 'required'],
            [['bind_id', 'seq', 'invoice_id'], 'integer'],
            [['bind_id', 'seq'], 'unique', 'targetAttribute' => ['bind_id', 'seq']],
            [['bind_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApInvBind::className(), 'targetAttribute' => ['bind_id' => 'bind_id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
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
        ];
    }

    /**
     * Gets query for [[Bind]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBind()
    {
        return $this->hasOne(ApInvBind::className(), ['bind_id' => 'bind_id']);
    }

    /**
     * Gets query for [[Invoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoice()
    {
        return $this->hasOne(ApInv::className(), ['invoice_id' => 'invoice_id']);
    }
}
