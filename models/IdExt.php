<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "id_ext".
 *
 * @property int $num_id
 * @property string $name_id
 * @property int $next_id
 */
class IdExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'id_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_id', 'name_id'], 'required'],
            [['num_id', 'next_id'], 'integer'],
            [['name_id'], 'string', 'max' => 30],
            [['num_id', 'name_id'], 'unique', 'targetAttribute' => ['num_id', 'name_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_id' => 'Num ID',
            'name_id' => 'Name ID',
            'next_id' => 'Next ID',
        ];
    }
}
