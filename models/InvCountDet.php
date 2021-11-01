<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_count_det".
 *
 * @property int $count_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $physical_qty
 * @property float|null $system_qty
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $location
 * @property int|null $location_row
 * @property int|null $location_col
 * @property string|null $remark
 *
 * @property Item $item
 * @property InvCount $count
 */
class InvCountDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_count_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count_id', 'seq'], 'required'],
            [['count_id', 'seq', 'item_id', 'location_row', 'location_col'], 'integer'],
            [['physical_qty', 'system_qty', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['location', 'remark'], 'string', 'max' => 30],
            [['count_id', 'seq'], 'unique', 'targetAttribute' => ['count_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['count_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvCount::className(), 'targetAttribute' => ['count_id' => 'count_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'count_id' => 'Count ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'physical_qty' => 'Physical Qty',
            'system_qty' => 'System Qty',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'location' => 'Location',
            'location_row' => 'Location Row',
            'location_col' => 'Location Col',
            'remark' => 'Remark',
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
     * Gets query for [[Count]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCount()
    {
        return $this->hasOne(InvCount::className(), ['count_id' => 'count_id']);
    }
}
