<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "id_actv_mntn".
 *
 * @property string|null $id_name
 * @property int|null $next_id
 */
class IdActvMntn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'id_actv_mntn';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['next_id'], 'integer'],
            [['id_name'], 'string', 'max' => 30],
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
