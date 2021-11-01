<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_count_det_ed_xt".
 *
 * @property int|null $count_id
 * @property int|null $item_id
 * @property float|null $qty
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $expired_date
 * @property int|null $created_user_id
 *
 * @property InvCount $count
 */
class InvCountDetEdXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_count_det_ed_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count_id', 'item_id', 'created_user_id'], 'integer'],
            [['qty', 'uom_conversion'], 'number'],
            [['expired_date'], 'safe'],
            [['uom'], 'string', 'max' => 5],
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
            'item_id' => 'Item ID',
            'qty' => 'Qty',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'expired_date' => 'Expired Date',
            'created_user_id' => 'Created User ID',
        ];
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
