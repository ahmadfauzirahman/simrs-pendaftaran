<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_unit_staff".
 *
 * @property int $sub_unit_id
 * @property int $seq
 * @property int|null $staff_id
 * @property int|null $staff_group_id
 * @property int|null $staff_type_id
 *
 * @property SubUnit $subUnit
 * @property Staff $staff
 * @property StaffGroup $staffGroup
 * @property StaffType $staffType
 */
class SubUnitStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_unit_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'seq'], 'required'],
            [['sub_unit_id', 'seq', 'staff_id', 'staff_group_id', 'staff_type_id'], 'integer'],
            [['sub_unit_id', 'seq'], 'unique', 'targetAttribute' => ['sub_unit_id', 'seq']],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
            [['staff_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffGroup::className(), 'targetAttribute' => ['staff_group_id' => 'staff_group_id']],
            [['staff_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffType::className(), 'targetAttribute' => ['staff_type_id' => 'staff_type_id']],
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
            'staff_id' => 'Staff ID',
            'staff_group_id' => 'Staff Group ID',
            'staff_type_id' => 'Staff Type ID',
        ];
    }

    /**
     * Gets query for [[SubUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnit()
    {
        return $this->hasOne(SubUnit::className(), ['sub_unit_id' => 'sub_unit_id']);
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

    /**
     * Gets query for [[StaffGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffGroup()
    {
        return $this->hasOne(StaffGroup::className(), ['staff_group_id' => 'staff_group_id']);
    }

    /**
     * Gets query for [[StaffType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffType()
    {
        return $this->hasOne(StaffType::className(), ['staff_type_id' => 'staff_type_id']);
    }
}
