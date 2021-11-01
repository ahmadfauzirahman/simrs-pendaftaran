<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "value_edit_farmasi_ext".
 *
 * @property int $reg_id
 * @property string|null $edit_date
 * @property float|null $real_value
 * @property float|null $edit_value
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $posted
 *
 * @property Registration $reg
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class ValueEditFarmasiExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'value_edit_farmasi_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['edit_date', 'created_time', 'modified_time'], 'safe'],
            [['real_value', 'edit_value'], 'number'],
            [['reg_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
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
            'reg_id' => 'Reg ID',
            'edit_date' => 'Edit Date',
            'real_value' => 'Real Value',
            'edit_value' => 'Edit Value',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'posted' => 'Posted',
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
