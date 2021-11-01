<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_fee_other_criteria".
 *
 * @property int $staff_id
 * @property int|null $start_calc_date
 * @property float|null $guaranteed_amount
 * @property float|null $share_after_amount
 */
class StaffFeeOtherCriteria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_fee_other_criteria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id'], 'required'],
            [['staff_id', 'start_calc_date'], 'integer'],
            [['guaranteed_amount', 'share_after_amount'], 'number'],
            [['staff_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'start_calc_date' => 'Start Calc Date',
            'guaranteed_amount' => 'Guaranteed Amount',
            'share_after_amount' => 'Share After Amount',
        ];
    }
}
