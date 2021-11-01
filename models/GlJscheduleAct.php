<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_jschedule_act".
 *
 * @property int $jschedule_id
 * @property int $seq
 * @property string|null $act_date
 * @property string|null $description
 * @property int|null $act_user_id
 */
class GlJscheduleAct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_jschedule_act';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jschedule_id', 'seq'], 'required'],
            [['jschedule_id', 'seq', 'act_user_id'], 'integer'],
            [['act_date'], 'safe'],
            [['description'], 'string', 'max' => 200],
            [['jschedule_id', 'seq'], 'unique', 'targetAttribute' => ['jschedule_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jschedule_id' => 'Jschedule ID',
            'seq' => 'Seq',
            'act_date' => 'Act Date',
            'description' => 'Description',
            'act_user_id' => 'Act User ID',
        ];
    }
}
