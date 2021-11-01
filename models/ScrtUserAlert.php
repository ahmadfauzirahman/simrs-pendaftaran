<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "scrt_user_alert".
 *
 * @property int $user_id
 * @property int $alert_id
 * @property int|null $view_detail
 */
class ScrtUserAlert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scrt_user_alert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'alert_id'], 'required'],
            [['user_id', 'alert_id', 'view_detail'], 'integer'],
            [['user_id', 'alert_id'], 'unique', 'targetAttribute' => ['user_id', 'alert_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'alert_id' => 'Alert ID',
            'view_detail' => 'View Detail',
        ];
    }
}
