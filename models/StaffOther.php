<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_other".
 *
 * @property int $staff_id
 * @property string|null $staff_name
 * @property string|null $full_name
 * @property int|null $unit
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ActivityMntnc[] $activityMntncs
 * @property MarketingCardExt[] $marketingCardExts
 * @property MarketingVisite[] $marketingVisites
 * @property UnitOther $unit0
 */
class StaffOther extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_other';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id'], 'required'],
            [['staff_id', 'unit', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['staff_name'], 'string', 'max' => 30],
            [['full_name'], 'string', 'max' => 20],
            [['staff_name'], 'unique'],
            [['staff_id'], 'unique'],
            [['unit'], 'exist', 'skipOnError' => true, 'targetClass' => UnitOther::className(), 'targetAttribute' => ['unit' => 'unit_other_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'staff_name' => 'Staff Name',
            'full_name' => 'Full Name',
            'unit' => 'Unit',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ActivityMntncs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getActivityMntncs()
    {
        return $this->hasMany(ActivityMntnc::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[MarketingCardExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardExts()
    {
        return $this->hasMany(MarketingCardExt::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[MarketingVisites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingVisites()
    {
        return $this->hasMany(MarketingVisite::className(), ['staff_1' => 'staff_id']);
    }

    /**
     * Gets query for [[Unit0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit0()
    {
        return $this->hasOne(UnitOther::className(), ['unit_other_id' => 'unit']);
    }
}
