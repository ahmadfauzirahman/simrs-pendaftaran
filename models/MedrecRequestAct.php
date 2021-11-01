<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medrec_request_act".
 *
 * @property int $mr_act_id
 * @property int $mr_request_id
 * @property int $user_id
 * @property string $act_date
 * @property string|null $description
 */
class MedrecRequestAct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medrec_request_act';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_request_id', 'user_id', 'act_date'], 'required'],
            [['mr_request_id', 'user_id'], 'integer'],
            [['act_date'], 'safe'],
            [['description'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mr_act_id' => 'Mr Act ID',
            'mr_request_id' => 'Mr Request ID',
            'user_id' => 'User ID',
            'act_date' => 'Act Date',
            'description' => 'Description',
        ];
    }
}
