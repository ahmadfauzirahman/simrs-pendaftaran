<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "morder".
 *
 * @property int $order_id
 * @property string|null $order_no
 * @property string|null $order_date
 * @property string|null $req_receipt_date
 * @property int|null $order_status
 * @property int|null $printed
 * @property int|null $item_id
 * @property float|null $qty_ordered
 * @property float|null $qty_received
 * @property string|null $notes
 * @property int|null $num_of_receipts
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property int|null $warehouse_id
 *
 * @property Item $item
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Warehouse $warehouse
 * @property MorderMtl[] $morderMtls
 * @property MorderRes[] $morderRes
 * @property Mreceipt[] $mreceipts
 */
class Morder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'morder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id'], 'required'],
            [['order_id', 'order_status', 'printed', 'item_id', 'num_of_receipts', 'created_user_id', 'modified_user_id', 'warehouse_id'], 'integer'],
            [['order_date', 'req_receipt_date', 'created_time', 'modified_time'], 'safe'],
            [['qty_ordered', 'qty_received', 'uom_conversion'], 'number'],
            [['notes'], 'string'],
            [['order_no'], 'string', 'max' => 20],
            [['uom'], 'string', 'max' => 5],
            [['order_id'], 'unique'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_no' => 'Order No',
            'order_date' => 'Order Date',
            'req_receipt_date' => 'Req Receipt Date',
            'order_status' => 'Order Status',
            'printed' => 'Printed',
            'item_id' => 'Item ID',
            'qty_ordered' => 'Qty Ordered',
            'qty_received' => 'Qty Received',
            'notes' => 'Notes',
            'num_of_receipts' => 'Num Of Receipts',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'warehouse_id' => 'Warehouse ID',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
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
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[MorderMtls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorderMtls()
    {
        return $this->hasMany(MorderMtl::className(), ['order_id' => 'order_id']);
    }

    /**
     * Gets query for [[MorderRes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorderRes()
    {
        return $this->hasMany(MorderRes::className(), ['order_id' => 'order_id']);
    }

    /**
     * Gets query for [[Mreceipts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceipts()
    {
        return $this->hasMany(Mreceipt::className(), ['order_id' => 'order_id']);
    }
}
