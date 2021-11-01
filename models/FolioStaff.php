<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_staff".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $staff_id
 * @property int|null $staff_type_id
 * @property int|null $staff_group_id
 * @property string|null $roles
 *
 * @property Folio $folio
 * @property StaffGroup $staffGroup
 * @property StaffType $staffType
 * @property Staff $staff
 */
class FolioStaff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'staff_id', 'staff_type_id', 'staff_group_id'], 'integer'],
            [['roles'], 'string', 'max' => 128],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['staff_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffGroup::className(), 'targetAttribute' => ['staff_group_id' => 'staff_group_id']],
            [['staff_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffType::className(), 'targetAttribute' => ['staff_type_id' => 'staff_type_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'seq' => 'Seq',
            'staff_id' => 'Staff ID',
            'staff_type_id' => 'Staff Type ID',
            'staff_group_id' => 'Staff Group ID',
            'roles' => 'Roles',
        ];
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
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
