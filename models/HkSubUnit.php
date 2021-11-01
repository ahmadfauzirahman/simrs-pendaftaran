<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hk_sub_unit".
 *
 * @property int $id
 * @property int|null $sub_unit_id
 * @property string|null $hk_date
 * @property int|null $begin_status
 * @property int|null $end_status
 * @property string|null $notes
 * @property int|null $user_id
 *
 * @property SubUnit $subUnit
 * @property ScrtUser $user
 */
class HkSubUnit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hk_sub_unit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'begin_status', 'end_status', 'user_id'], 'integer'],
            [['hk_date'], 'safe'],
            [['notes'], 'string'],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sub_unit_id' => 'Sub Unit ID',
            'hk_date' => 'Hk Date',
            'begin_status' => 'Begin Status',
            'end_status' => 'End Status',
            'notes' => 'Notes',
            'user_id' => 'User ID',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_id']);
    }
}
