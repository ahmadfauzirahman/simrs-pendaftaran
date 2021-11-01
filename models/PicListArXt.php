<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pic_list_ar_xt".
 *
 * @property int $pay_id
 * @property int $seq
 * @property int|null $ar_id
 *
 * @property PicPay $pay
 * @property ArInv $ar
 */
class PicListArXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pic_list_ar_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_id', 'seq'], 'required'],
            [['pay_id', 'seq', 'ar_id'], 'integer'],
            [['pay_id', 'seq'], 'unique', 'targetAttribute' => ['pay_id', 'seq']],
            [['pay_id'], 'exist', 'skipOnError' => true, 'targetClass' => PicPay::className(), 'targetAttribute' => ['pay_id' => 'pay_id']],
            [['ar_id'], 'exist', 'skipOnError' => true, 'targetClass' => ArInv::className(), 'targetAttribute' => ['ar_id' => 'invoice_id']],
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
            'ar_id' => 'Ar ID',
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
     * Gets query for [[Ar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAr()
    {
        return $this->hasOne(ArInv::className(), ['invoice_id' => 'ar_id']);
    }
}
