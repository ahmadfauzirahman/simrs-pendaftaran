<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_det".
 *
 * @property int $staff_id
 * @property int $seq
 * @property int|null $item_type_id
 * @property float|null $staff_pct
 * @property float|null $hospital_pct
 *
 * @property ItemType $itemType
 * @property Staff $staff
 */
class StaffDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'seq'], 'required'],
            [['staff_id', 'seq', 'item_type_id'], 'integer'],
            [['staff_pct', 'hospital_pct'], 'number'],
            [['staff_id', 'seq'], 'unique', 'targetAttribute' => ['staff_id', 'seq']],
            [['item_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemType::className(), 'targetAttribute' => ['item_type_id' => 'item_type_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
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
            'item_type_id' => 'Item Type ID',
            'staff_pct' => 'Staff Pct',
            'hospital_pct' => 'Hospital Pct',
        ];
    }

    /**
     * Gets query for [[ItemType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemType()
    {
        return $this->hasOne(ItemType::className(), ['item_type_id' => 'item_type_id']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'staff_id']);
    }
}
