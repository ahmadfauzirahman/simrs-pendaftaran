<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bed_available_bpjs".
 *
 * @property string $kodekelas
 * @property string $koderuang
 * @property string $namakelas
 * @property string $namaruang
 * @property int|null $kapasitas
 * @property int|null $tersedia
 * @property int|null $tersediapria
 * @property int|null $tersediawanita
 * @property int|null $tersediapriawanita
 * @property int|null $synchronize
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class BedAvailableBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bed_available_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kodekelas', 'koderuang', 'namakelas', 'namaruang'], 'required'],
            [['kapasitas', 'tersedia', 'tersediapria', 'tersediawanita', 'tersediapriawanita', 'synchronize', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['kodekelas'], 'string', 'max' => 5],
            [['koderuang'], 'string', 'max' => 10],
            [['namakelas'], 'string', 'max' => 50],
            [['namaruang'], 'string', 'max' => 150],
            [['kodekelas', 'koderuang'], 'unique', 'targetAttribute' => ['kodekelas', 'koderuang']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kodekelas' => 'Kodekelas',
            'koderuang' => 'Koderuang',
            'namakelas' => 'Namakelas',
            'namaruang' => 'Namaruang',
            'kapasitas' => 'Kapasitas',
            'tersedia' => 'Tersedia',
            'tersediapria' => 'Tersediapria',
            'tersediawanita' => 'Tersediawanita',
            'tersediapriawanita' => 'Tersediapriawanita',
            'synchronize' => 'Synchronize',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
