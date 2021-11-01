<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mreceipt".
 *
 * @property int $receipt_id
 * @property string|null $receipt_no
 * @property int|null $gl_year
 * @property int|null $gl_period
 * @property string|null $receipt_date
 * @property int|null $order_id
 * @property string|null $order_no
 * @property int|null $item_id
 * @property int|null $warehouse_id
 * @property float|null $qty_received
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $uom
 * @property int|null $printed
 *
 * @property Warehouse $warehouse
 * @property Morder $order
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property MreceiptByprod[] $mreceiptByprods
 * @property MreceiptMtl[] $mreceiptMtls
 * @property MreceiptRes[] $mreceiptRes
 */
class Mreceipt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mreceipt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id'], 'required'],
            [['receipt_id', 'gl_year', 'gl_period', 'order_id', 'item_id', 'warehouse_id', 'posted', 'created_user_id', 'modified_user_id', 'printed'], 'integer'],
            [['receipt_date', 'created_time', 'modified_time'], 'safe'],
            [['qty_received'], 'number'],
            [['receipt_no', 'order_no'], 'string', 'max' => 20],
            [['uom'], 'string', 'max' => 5],
            [['receipt_id'], 'unique'],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Morder::className(), 'targetAttribute' => ['order_id' => 'order_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'receipt_id' => 'Receipt ID',
            'receipt_no' => 'Receipt No',
            'gl_year' => 'Gl Year',
            'gl_period' => 'Gl Period',
            'receipt_date' => 'Receipt Date',
            'order_id' => 'Order ID',
            'order_no' => 'Order No',
            'item_id' => 'Item ID',
            'warehouse_id' => 'Warehouse ID',
            'qty_received' => 'Qty Received',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'uom' => 'Uom',
            'printed' => 'Printed',
        ];
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
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Morder::className(), ['order_id' => 'order_id']);
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
     * Gets query for [[MreceiptByprods]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptByprods()
    {
        return $this->hasMany(MreceiptByprod::className(), ['receipt_id' => 'receipt_id']);
    }

    /**
     * Gets query for [[MreceiptMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptMtls()
    {
        return $this->hasMany(MreceiptMtl::className(), ['receipt_id' => 'receipt_id']);
    }

    /**
     * Gets query for [[MreceiptRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptRes()
    {
        return $this->hasMany(MreceiptRes::className(), ['receipt_id' => 'receipt_id']);
    }
}
