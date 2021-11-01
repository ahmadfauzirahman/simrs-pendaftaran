<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unit_other".
 *
 * @property int $unit_other_id
 * @property string|null $unit_other_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $disabled
 *
 * @property StaffOther[] $staffOthers
 * @property XapprovalObillXt[] $xapprovalObillXts
 */
class UnitOther extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'unit_other';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_other_id'], 'required'],
            [['unit_other_id', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['unit_other_name'], 'string', 'max' => 50],
            [['unit_other_name'], 'unique'],
            [['unit_other_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unit_other_id' => 'Unit Other ID',
            'unit_other_name' => 'Unit Other Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'disabled' => 'Disabled',
        ];
    }

    /**
     * Gets query for [[StaffOthers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffOthers()
    {
        return $this->hasMany(StaffOther::className(), ['unit' => 'unit_other_id']);
    }

    /**
     * Gets query for [[XapprovalObillXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getXapprovalObillXts()
    {
        return $this->hasMany(XapprovalObillXt::className(), ['unit_id' => 'unit_other_id']);
    }
}
