<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_count_det".
 *
 * @property int $count_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $physical_qty
 * @property float|null $system_qty
 * @property string|null $uom
 * @property float|null $uom_conversion
 *
 * @property NItem $item
 * @property NInvCount $count
 */
class NInvCountDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_count_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count_id', 'seq'], 'required'],
            [['count_id', 'seq', 'item_id'], 'integer'],
            [['physical_qty', 'system_qty', 'uom_conversion'], 'number'],
            [['uom'], 'string', 'max' => 5],
            [['count_id', 'seq'], 'unique', 'targetAttribute' => ['count_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => NItem::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['count_id'], 'exist', 'skipOnError' => true, 'targetClass' => NInvCount::className(), 'targetAttribute' => ['count_id' => 'count_id']],
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
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(NItem::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[Count]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCount()
    {
        return $this->hasOne(NInvCount::className(), ['count_id' => 'count_id']);
    }
}
