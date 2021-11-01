<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_dep".
 *
 * @property int $dept_id
 * @property string|null $dept_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class MaintDep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_dep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id'], 'required'],
            [['dept_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['dept_name'], 'string', 'max' => 100],
            [['dept_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => 'Dept ID',
            'dept_name' => 'Dept Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
