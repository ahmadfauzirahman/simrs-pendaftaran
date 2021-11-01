<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diet_group".
 *
 * @property int $diet_group_id
 * @property string|null $diet_group_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class DietGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diet_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diet_group_id'], 'required'],
            [['diet_group_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['diet_group_name'], 'string', 'max' => 50],
            [['diet_group_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'diet_group_id' => 'Diet Group ID',
            'diet_group_name' => 'Diet Group Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
