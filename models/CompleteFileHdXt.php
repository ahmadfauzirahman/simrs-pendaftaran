<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "complete_file_hd_xt".
 *
 * @property int $reg_id
 * @property int|null $staff_id
 * @property string|null $date_receive_file
 * @property string|null $date_start_hd
 * @property int|null $h_1
 * @property int|null $h_2
 * @property int|null $h_3
 * @property int|null $h_4
 * @property int|null $h_5
 * @property int|null $h_6
 * @property int|null $h_7
 * @property int|null $h_8
 * @property int|null $h_9
 * @property int|null $h_10
 * @property int|null $h_11
 * @property int|null $h_12
 * @property int|null $h_cp
 * @property string|null $h_date_cp
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property Registration $reg
 * @property ScrtUser $createdUser
 */
class CompleteFileHdXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'complete_file_hd_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'staff_id', 'h_1', 'h_2', 'h_3', 'h_4', 'h_5', 'h_6', 'h_7', 'h_8', 'h_9', 'h_10', 'h_11', 'h_12', 'h_cp', 'created_user_id'], 'integer'],
            [['date_receive_file', 'date_start_hd', 'h_date_cp', 'created_time'], 'safe'],
            [['reg_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'staff_id' => 'Staff ID',
            'date_receive_file' => 'Date Receive File',
            'date_start_hd' => 'Date Start Hd',
            'h_1' => 'H 1',
            'h_2' => 'H 2',
            'h_3' => 'H 3',
            'h_4' => 'H 4',
            'h_5' => 'H 5',
            'h_6' => 'H 6',
            'h_7' => 'H 7',
            'h_8' => 'H 8',
            'h_9' => 'H 9',
            'h_10' => 'H 10',
            'h_11' => 'H 11',
            'h_12' => 'H 12',
            'h_cp' => 'H Cp',
            'h_date_cp' => 'H Date Cp',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
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
}
