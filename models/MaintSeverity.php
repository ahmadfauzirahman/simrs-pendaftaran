<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_severity".
 *
 * @property int $severity_id
 * @property string|null $severity
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property MaintAct[] $maintActs
 */
class MaintSeverity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_severity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['severity'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'severity_id' => 'Severity ID',
            'severity' => 'Severity',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[MaintActs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaintActs()
    {
        return $this->hasMany(MaintAct::className(), ['severity_id' => 'severity_id']);
    }
}
