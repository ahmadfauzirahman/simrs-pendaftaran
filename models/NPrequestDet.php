<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_prequest_det".
 *
 * @property int $request_id
 * @property int $seq
 * @property int $item_id
 * @property float|null $qty_requested
 * @property float|null $qty_ordered
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $remark
 *
 * @property NPrequest $request
 */
class NPrequestDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_prequest_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['request_id', 'seq', 'item_id'], 'required'],
            [['request_id', 'seq', 'item_id'], 'integer'],
            [['qty_requested', 'qty_ordered', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['request_id', 'seq'], 'unique', 'targetAttribute' => ['request_id', 'seq']],
            [['request_id'], 'exist', 'skipOnError' => true, 'targetClass' => NPrequest::className(), 'targetAttribute' => ['request_id' => 'request_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'request_id' => 'Request ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'qty_requested' => 'Qty Requested',
            'qty_ordered' => 'Qty Ordered',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'remark' => 'Remark',
        ];
    }

    /**
     * Gets query for [[Request]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(NPrequest::className(), ['request_id' => 'request_id']);
    }
}
