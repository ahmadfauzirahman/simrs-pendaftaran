<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_unit_unavailable".
 *
 * @property int $sub_unit_id
 * @property int $seq
 * @property string|null $unavailable_from
 * @property string|null $unavailable_to
 * @property string|null $unavailable_reason
 */
class SubUnitUnavailable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_unit_unavailable';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'seq'], 'required'],
            [['sub_unit_id', 'seq'], 'integer'],
            [['unavailable_from', 'unavailable_to'], 'safe'],
            [['unavailable_reason'], 'string', 'max' => 100],
            [['sub_unit_id', 'seq'], 'unique', 'targetAttribute' => ['sub_unit_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_unit_id' => 'Sub Unit ID',
            'seq' => 'Seq',
            'unavailable_from' => 'Unavailable From',
            'unavailable_to' => 'Unavailable To',
            'unavailable_reason' => 'Unavailable Reason',
        ];
    }
}
