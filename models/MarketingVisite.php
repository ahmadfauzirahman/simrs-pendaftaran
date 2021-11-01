<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketing_visite".
 *
 * @property int $marketing_id
 * @property string|null $marketing_no
 * @property string|null $marketing_date
 * @property string|null $marketing_end_date
 * @property int|null $staff_1
 * @property int|null $staff_2
 * @property int|null $staff_3
 * @property int|null $staff_4
 * @property int|null $staff_5
 * @property int|null $reference_id
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $posted
 *
 * @property StaffOther $staff1
 * @property ReferenceType $reference
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class MarketingVisite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketing_visite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marketing_id'], 'required'],
            [['marketing_id', 'staff_1', 'staff_2', 'staff_3', 'staff_4', 'staff_5', 'reference_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['marketing_date', 'marketing_end_date', 'created_time', 'modified_time'], 'safe'],
            [['marketing_no', 'notes'], 'string', 'max' => 50],
            [['marketing_id'], 'unique'],
            [['staff_1'], 'exist', 'skipOnError' => true, 'targetClass' => StaffOther::className(), 'targetAttribute' => ['staff_1' => 'staff_id']],
            [['reference_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReferenceType::className(), 'targetAttribute' => ['reference_id' => 'ref_type_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'marketing_id' => 'Marketing ID',
            'marketing_no' => 'Marketing No',
            'marketing_date' => 'Marketing Date',
            'marketing_end_date' => 'Marketing End Date',
            'staff_1' => 'Staff 1',
            'staff_2' => 'Staff 2',
            'staff_3' => 'Staff 3',
            'staff_4' => 'Staff 4',
            'staff_5' => 'Staff 5',
            'reference_id' => 'Reference ID',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[Staff1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff1()
    {
        return $this->hasOne(StaffOther::className(), ['staff_id' => 'staff_1']);
    }

    /**
     * Gets query for [[Reference]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReference()
    {
        return $this->hasOne(ReferenceType::className(), ['ref_type_id' => 'reference_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }
}
