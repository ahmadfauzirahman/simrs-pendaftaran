<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu_ext".
 *
 * @property int $mcu_id
 * @property string|null $mcu_no
 * @property string|null $mcu_date
 * @property int|null $customer_id
 * @property string|null $item_mcu
 * @property int|null $dokter_id
 * @property int|null $amount
 * @property float|null $amount_mcu
 * @property int|null $lokasi_id
 * @property string|null $notes
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property McuDetExt[] $mcuDetExts
 * @property McuPayByXt $customer
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Staff $dokter
 */
class McuExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mcu_id'], 'required'],
            [['mcu_id', 'customer_id', 'dokter_id', 'amount', 'lokasi_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['mcu_date', 'created_time', 'modified_time'], 'safe'],
            [['amount_mcu'], 'number'],
            [['notes'], 'string'],
            [['mcu_no'], 'string', 'max' => 50],
            [['item_mcu'], 'string', 'max' => 100],
            [['mcu_id'], 'unique'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => McuPayByXt::className(), 'targetAttribute' => ['customer_id' => 'pay_by_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['dokter_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['dokter_id' => 'staff_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mcu_id' => 'Mcu ID',
            'mcu_no' => 'Mcu No',
            'mcu_date' => 'Mcu Date',
            'customer_id' => 'Customer ID',
            'item_mcu' => 'Item Mcu',
            'dokter_id' => 'Dokter ID',
            'amount' => 'Amount',
            'amount_mcu' => 'Amount Mcu',
            'lokasi_id' => 'Lokasi ID',
            'notes' => 'Notes',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[McuDetExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuDetExts()
    {
        return $this->hasMany(McuDetExt::className(), ['mcu_id' => 'mcu_id']);
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(McuPayByXt::className(), ['pay_by_id' => 'customer_id']);
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
     * Gets query for [[Dokter]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDokter()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'dokter_id']);
    }
}
