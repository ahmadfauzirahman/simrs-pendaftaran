<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing_pmt_ar_det".
 *
 * @property int $process_id
 * @property int $invoice_id
 *
 * @property BillingPmtAr $process
 * @property ArInv $invoice
 */
class BillingPmtArDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing_pmt_ar_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['process_id', 'invoice_id'], 'required'],
            [['process_id', 'invoice_id'], 'integer'],
            [['process_id', 'invoice_id'], 'unique', 'targetAttribute' => ['process_id', 'invoice_id']],
            [['process_id'], 'exist', 'skipOnError' => true, 'targetClass' => BillingPmtAr::className(), 'targetAttribute' => ['process_id' => 'process_id']],
            [['invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['invoice_id' => 'invoice_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'process_id' => 'Process ID',
            'invoice_id' => 'Invoice ID',
        ];
    }

    /**
     * Gets query for [[Process]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProcess()
    {
        return $this->hasOne(BillingPmtAr::className(), ['process_id' => 'process_id']);
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
