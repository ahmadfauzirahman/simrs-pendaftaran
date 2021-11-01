<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_claim_list".
 *
 * @property int $payment_id
 * @property int $seq
 * @property string|null $claim_no
 * @property string|null $claim_name
 * @property float|null $claim_value
 */
class PaymentClaimList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_claim_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'seq'], 'required'],
            [['payment_id', 'seq'], 'integer'],
            [['claim_value'], 'number'],
            [['claim_no'], 'string', 'max' => 50],
            [['claim_name'], 'string', 'max' => 100],
            [['payment_id', 'seq'], 'unique', 'targetAttribute' => ['payment_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'seq' => 'Seq',
            'claim_no' => 'Claim No',
            'claim_name' => 'Claim Name',
            'claim_value' => 'Claim Value',
        ];
    }
}
