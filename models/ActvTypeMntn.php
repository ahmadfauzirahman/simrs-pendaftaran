<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actv_type_mntn".
 *
 * @property int $actv_type_id
 * @property string|null $actv_type_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ActivityMntnc[] $activityMntncs
 */
class ActvTypeMntn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actv_type_mntn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['actv_type_id'], 'required'],
            [['actv_type_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['actv_type_name'], 'string', 'max' => 30],
            [['actv_type_name'], 'unique'],
            [['actv_type_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'actv_type_id' => 'Actv Type ID',
            'actv_type_name' => 'Actv Type Name',
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
        return $this->hasMany(ActivityMntnc::className(), ['activity_type' => 'actv_type_id']);
    }
}
