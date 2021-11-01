<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_access".
 *
 * @property int $report_id
 * @property int $seq
 * @property int|null $user_id
 * @property int|null $group_id
 * @property int|null $can_view
 * @property int|null $can_modify
 * @property int|null $can_delete
 *
 * @property Report $report
 * @property ScrtUser $user
 * @property ScrtGroup $group
 */
class ReportAccess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_access';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'seq'], 'required'],
            [['report_id', 'seq', 'user_id', 'group_id', 'can_view', 'can_modify', 'can_delete'], 'integer'],
            [['report_id', 'seq'], 'unique', 'targetAttribute' => ['report_id', 'seq']],
            [['report_id'], 'exist', 'skipOnError' => true, 'targetClass' => Report::className(), 'targetAttribute' => ['report_id' => 'report_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtGroup::className(), 'targetAttribute' => ['group_id' => 'group_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'report_id' => 'Report ID',
            'seq' => 'Seq',
            'user_id' => 'User ID',
            'group_id' => 'Group ID',
            'can_view' => 'Can View',
            'can_modify' => 'Can Modify',
            'can_delete' => 'Can Delete',
        ];
    }

    /**
     * Gets query for [[Report]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReport()
    {
        return $this->hasOne(Report::className(), ['report_id' => 'report_id']);
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

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(ScrtGroup::className(), ['group_id' => 'group_id']);
    }
}
