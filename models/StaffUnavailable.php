<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_unavailable".
 *
 * @property int $staff_id
 * @property int|null $seq
 * @property string|null $unavailable_from
 * @property string|null $unavailable_to
 * @property string|null $unavailable_reason
 * @property int|null $dept_id
 */
class StaffUnavailable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_unavailable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id'], 'required'],
            [['staff_id', 'seq', 'dept_id'], 'integer'],
            [['unavailable_from', 'unavailable_to'], 'safe'],
            [['unavailable_reason'], 'string', 'max' => 100],
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
            'seq' => 'Seq',
            'unavailable_from' => 'Unavailable From',
            'unavailable_to' => 'Unavailable To',
            'unavailable_reason' => 'Unavailable Reason',
            'dept_id' => 'Dept ID',
        ];
    }
}
