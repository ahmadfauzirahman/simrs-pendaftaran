<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "id_ap".
 *
 * @property string $id_name
 * @property int $next_id
 */
class IdAp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'id_ap';
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
