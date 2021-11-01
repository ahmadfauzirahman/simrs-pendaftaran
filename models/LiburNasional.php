<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libur_nasional".
 *
 * @property string|null $tanggal
 * @property string|null $ket
 */
class LiburNasional extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libur_nasional';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal'], 'safe'],
            [['ket'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tanggal' => 'Tanggal',
            'ket' => 'Ket',
        ];
    }
}
