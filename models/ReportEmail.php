<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_email".
 *
 * @property int $report_id
 * @property int $seq
 * @property int|null $user_id
 * @property int|null $group_id
 * @property int|null $email_type
 */
class ReportEmail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_email';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'seq'], 'required'],
            [['report_id', 'seq', 'user_id', 'group_id', 'email_type'], 'integer'],
            [['report_id', 'seq'], 'unique', 'targetAttribute' => ['report_id', 'seq']],
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
            'email_type' => 'Email Type',
        ];
    }
}
