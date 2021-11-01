<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "id_scrt".
 *
 * @property string $id_name
 * @property int $next_id
 */
class IdScrt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'id_scrt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_name'], 'required'],
            [['next_id'], 'integer'],
            [['id_name'], 'string', 'max' => 30],
            [['id_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_name' => 'Id Name',
            'next_id' => 'Next ID',
        ];
    }
}