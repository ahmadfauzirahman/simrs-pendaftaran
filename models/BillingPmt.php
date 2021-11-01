<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "billing_pmt".
 *
 * @property int $bill_pmt_id
 * @property string|null $bill_pmt_no
 * @property string|null $bill_pmt_date
 * @property int|null $payment_type
 * @property float|null $amount
 * @property int $registration_id
 * @property int|null $pay_by
 * @property string|null $notes
 * @property int|null $print_no
 * @property int|null $all_print_no
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $bill_no
 * @property string|null $bill_status
 * @property string|null $id_bill
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Registration $registration
 * @property BillingPmtDet[] $billingPmtDets
 * @property BillingPmtFolio[] $billingPmtFolios
 * @property Folio[] $folios
 */
class BillingPmt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'billing_pmt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_pmt_id', 'registration_id'], 'required'],
            [['bill_pmt_id', 'payment_type', 'registration_id', 'pay_by', 'print_no', 'all_print_no', 'created_user_id', 'modified_user_id'], 'integer'],
            [['bill_pmt_date', 'created_time', 'modified_time'], 'safe'],
            [['amount'], 'number'],
            [['notes'], 'string'],
            [['bill_pmt_no'], 'string', 'max' => 20],
            [['bill_no'], 'string', 'max' => 11],
            [['bill_status', 'id_bill'], 'string', 'max' => 2],
            [['bill_pmt_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['registration_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['registration_id' => 'registration_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bill_pmt_id' => 'Bill Pmt ID',
            'bill_pmt_no' => 'Bill Pmt No',
            'bill_pmt_date' => 'Bill Pmt Date',
            'payment_type' => 'Payment Type',
            'amount' => 'Amount',
            'registration_id' => 'Registration ID',
            'pay_by' => 'Pay By',
            'notes' => 'Notes',
            'print_no' => 'Print No',
            'all_print_no' => 'All Print No',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'bill_no' => 'Bill No',
            'bill_status' => 'Bill Status',
            'id_bill' => 'Id Bill',
        ];
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[Registration]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistration()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'registration_id']);
    }

    /**
     * Gets query for [[BillingPmtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtDets()
    {
        return $this->hasMany(BillingPmtDet::className(), ['bill_pmt_id' => 'bill_pmt_id']);
    }

    /**
     * Gets query for [[BillingPmtFolios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBillingPmtFolios()
    {
        return $this->hasMany(BillingPmtFolio::className(), ['bill_pmt_id' => 'bill_pmt_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['folio_id' => 'folio_id'])->viaTable('billing_pmt_folio', ['bill_pmt_id' => 'bill_pmt_id']);
    }
}
