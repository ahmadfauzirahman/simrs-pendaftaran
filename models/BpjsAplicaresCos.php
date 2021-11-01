<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_aplicares_cos".
 *
 * @property string $kodekelas
 * @property string $namakelas
 */
class BpjsAplicaresCos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_aplicares_cos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kodekelas', 'namakelas'], 'required'],
            [['kodekelas'], 'string', 'max' => 5],
            [['namakelas'], 'string', 'max' => 50],
            [['kodekelas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kodekelas' => 'Kodekelas',
            'namakelas' => 'Namakelas',
        ];
    }
}
