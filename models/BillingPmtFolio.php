<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing_pmt_folio".
 *
 * @property int $bill_pmt_id
 * @property int $folio_id
 * @property float|null $amount
 *
 * @property Folio $folio
 * @property BillingPmt $billPmt
 */
class BillingPmtFolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing_pmt_folio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_pmt_id', 'folio_id'], 'required'],
            [['bill_pmt_id', 'folio_id'], 'integer'],
            [['amount'], 'number'],
            [['bill_pmt_id', 'folio_id'], 'unique', 'targetAttribute' => ['bill_pmt_id', 'folio_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['bill_pmt_id'], 'exist', 'skipOnError' => true, 'targetClass' => BillingPmt::className(), 'targetAttribute' => ['bill_pmt_id' => 'bill_pmt_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bill_pmt_id' => 'Bill Pmt ID',
            'folio_id' => 'Folio ID',
            'amount' => 'Amount',
        ];
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[BillPmt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillPmt()
    {
        return $this->hasOne(BillingPmt::className(), ['bill_pmt_id' => 'bill_pmt_id']);
    }
}
