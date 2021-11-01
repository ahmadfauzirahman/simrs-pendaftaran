<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "temp".
 *
 * @property int $id
 * @property string|null $medrec
 * @property string|null $nama
 */
class Temp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'temp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['medrec'], 'string', 'max' => 50],
            [['nama'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medrec' => 'Medrec',
            'nama' => 'Nama',
        ];
    }
}
