<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "monthly_cost".
 *
 * @property string $inv_date
 * @property int $item_id
 * @property float|null $wgt_avg_cost
 */
class MonthlyCost extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monthly_cost';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_date', 'item_id'], 'required'],
            [['inv_date'], 'safe'],
            [['item_id'], 'integer'],
            [['wgt_avg_cost'], 'number'],
            [['inv_date', 'item_id'], 'unique', 'targetAttribute' => ['inv_date', 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inv_date' => 'Inv Date',
            'item_id' => 'Item ID',
            'wgt_avg_cost' => 'Wgt Avg Cost',
        ];
    }
}
