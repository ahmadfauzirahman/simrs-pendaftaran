<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_kondisi_pulang".
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $description
 */
class BpjsKondisiPulang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_kondisi_pulang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'string', 'max' => 5],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
