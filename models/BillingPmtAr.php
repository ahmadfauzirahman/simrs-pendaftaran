<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing_pmt_ar".
 *
 * @property int $process_id
 * @property string $process_date
 * @property int $user_id
 * @property string|null $notes
 * @property int|null $source
 *
 * @property ScrtUser $user
 * @property BillingPmtArDet[] $billingPmtArDets
 * @property ArInv[] $invoices
 */
class BillingPmtAr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing_pmt_ar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['process_id'], 'required'],
            [['process_id', 'user_id', 'source'], 'integer'],
            [['process_date'], 'safe'],
            [['notes'], 'string'],
            [['process_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'process_id' => 'Process ID',
            'process_date' => 'Process Date',
            'user_id' => 'User ID',
            'notes' => 'Notes',
            'source' => 'Source',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_id']);
    }

    /**
     * Gets query for [[BillingPmtArDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtArDets()
    {
        return $this->hasMany(BillingPmtArDet::className(), ['process_id' => 'process_id']);
    }

    /**
     * Gets query for [[Invoices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoices()
    {
        return $this->hasMany(ArInv::className(), ['invoice_id' => 'invoice_id'])->viaTable('billing_pmt_ar_det', ['process_id' => 'process_id']);
    }
}
