<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "preceipt".
 *
 * @property int $receipt_id
 * @property int|null $vendor_id
 * @property string|null $receipt_no
 * @property string|null $receipt_date
 * @property int|null $order_id
 * @property string|null $order_no
 * @property int|null $receipt_type
 * @property int|null $warehouse_id
 * @property int|null $posted
 * @property int|null $printed
 * @property int|null $ap_invoice_id
 * @property string|null $notes
 * @property string|null $received_by
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Vendor $vendor
 * @property Warehouse $warehouse
 * @property ApInv $apInvoice
 * @property Porder $order
 * @property PreceiptDet[] $preceiptDets
 */
class Preceipt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'preceipt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id'], 'required'],
            [['receipt_id', 'vendor_id', 'order_id', 'receipt_type', 'warehouse_id', 'posted', 'printed', 'ap_invoice_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['receipt_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['receipt_no', 'order_no'], 'string', 'max' => 20],
            [['received_by'], 'string', 'max' => 30],
            [['receipt_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['ap_invoice_id'], 'exist', 'skipOnError' => true, 'targetClass' => ApInv::className(), 'targetAttribute' => ['ap_invoice_id' => 'invoice_id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Porder::className(), 'targetAttribute' => ['order_id' => 'order_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'receipt_id' => 'Receipt ID',
            'vendor_id' => 'Vendor ID',
            'receipt_no' => 'Receipt No',
            'receipt_date' => 'Receipt Date',
            'order_id' => 'Order ID',
            'order_no' => 'Order No',
            'receipt_type' => 'Receipt Type',
            'warehouse_id' => 'Warehouse ID',
            'posted' => 'Posted',
            'printed' => 'Printed',
            'ap_invoice_id' => 'Ap Invoice ID',
            'notes' => 'Notes',
            'received_by' => 'Received By',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
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
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[ApInvoice]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvoice()
    {
        return $this->hasOne(ApInv::className(), ['invoice_id' => 'ap_invoice_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Porder::className(), ['order_id' => 'order_id']);
    }

    /**
     * Gets query for [[PreceiptDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPreceiptDets()
    {
        return $this->hasMany(PreceiptDet::className(), ['receipt_id' => 'receipt_id']);
    }
}
