<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "labor_luar_xt".
 *
 * @property int $lab_id
 * @property string|null $labor_name
 * @property string|null $location
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property TarifLaborLuarXt[] $tarifLaborLuarXts
 */
class LaborLuarXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'labor_luar_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lab_id'], 'required'],
            [['lab_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['labor_name', 'location'], 'string', 'max' => 100],
            [['labor_name'], 'unique'],
            [['lab_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lab_id' => 'Lab ID',
            'labor_name' => 'Labor Name',
            'location' => 'Location',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
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
     * Gets query for [[TarifLaborLuarXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTarifLaborLuarXts()
    {
        return $this->hasMany(TarifLaborLuarXt::className(), ['lab_id' => 'lab_id']);
    }
}
