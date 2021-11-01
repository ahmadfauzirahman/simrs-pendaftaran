<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pic_list_pay_xt".
 *
 * @property int $pay_id
 * @property int $seq
 * @property int|null $pic_id
 * @property float|null $amount
 *
 * @property PicPay $pay
 * @property PicCustomer $pic
 */
class PicListPayXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pic_list_pay_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_id', 'seq'], 'required'],
            [['pay_id', 'seq', 'pic_id'], 'integer'],
            [['amount'], 'number'],
            [['pay_id', 'seq'], 'unique', 'targetAttribute' => ['pay_id', 'seq']],
            [['pay_id'], 'exist', 'skipOnError' => true, 'targetClass' => PicPay::className(), 'targetAttribute' => ['pay_id' => 'pay_id']],
            [['pic_id'], 'exist', 'skipOnError' => true, 'targetClass' => PicCustomer::className(), 'targetAttribute' => ['pic_id' => 'pic_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pay_id' => 'Pay ID',
            'seq' => 'Seq',
            'pic_id' => 'Pic ID',
            'amount' => 'Amount',
        ];
    }

    /**
     * Gets query for [[Pay]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPay()
    {
        return $this->hasOne(PicPay::className(), ['pay_id' => 'pay_id']);
    }

    /**
     * Gets query for [[Pic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPic()
    {
        return $this->hasOne(PicCustomer::className(), ['pic_id' => 'pic_id']);
    }
}
