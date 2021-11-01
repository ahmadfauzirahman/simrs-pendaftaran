<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_prequest".
 *
 * @property int $request_id
 * @property string|null $request_no
 * @property int|null $warehouse_id
 * @property string|null $request_date
 * @property string|null $requested_by
 * @property string|null $request_notes
 * @property int|null $request_status
 * @property string|null $requested_date
 * @property int|null $order_id
 * @property int|null $num_of_orders
 * @property resource|null $notes
 *
 * @property NWarehouse $warehouse
 * @property NPrequestDet[] $nPrequestDets
 */
class NPrequest extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_prequest';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['request_id'], 'required'],
            [['request_id', 'warehouse_id', 'request_status', 'order_id', 'num_of_orders'], 'integer'],
            [['request_date', 'requested_date'], 'safe'],
            [['notes'], 'string'],
            [['request_no'], 'string', 'max' => 20],
            [['requested_by'], 'string', 'max' => 30],
            [['request_notes'], 'string', 'max' => 100],
            [['request_id'], 'unique'],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => NWarehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'request_id' => 'Request ID',
            'request_no' => 'Request No',
            'warehouse_id' => 'Warehouse ID',
            'request_date' => 'Request Date',
            'requested_by' => 'Requested By',
            'request_notes' => 'Request Notes',
            'request_status' => 'Request Status',
            'requested_date' => 'Requested Date',
            'order_id' => 'Order ID',
            'num_of_orders' => 'Num Of Orders',
            'notes' => 'Notes',
        ];
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(NWarehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[NPrequestDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPrequestDets()
    {
        return $this->hasMany(NPrequestDet::className(), ['request_id' => 'request_id']);
    }
}
