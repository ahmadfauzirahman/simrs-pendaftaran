<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftar".
 *
 * @property int $id_daftar
 * @property string|null $nomorkartu
 * @property string|null $nik
 * @property string|null $notelp
 * @property string|null $kodepoli
 * @property string|null $nomorreferensi
 * @property int|null $jenisrequest
 * @property string|null $polieksekutif
 * @property string|null $tanggalperiksa
 * @property int|null $status
 * @property int|null $jenisreferensi
 * @property int|null $nomorantrian
 * @property string|null $kodebooking
 * @property int|null $jenisantrian
 * @property string|null $estimasidilayani
 * @property string|null $namapoli
 * @property string|null $namadokter
 * @property string|null $create_time
 * @property string|null $ipaddress
 */
class Daftar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenisrequest', 'status', 'jenisreferensi', 'nomorantrian', 'jenisantrian'], 'integer'],
            [['tanggalperiksa', 'estimasidilayani', 'create_time'], 'safe'],
            [['nomorkartu', 'nik'], 'string', 'max' => 20],
            [['notelp', 'kodepoli', 'nomorreferensi', 'kodebooking', 'namapoli', 'namadokter', 'ipaddress'], 'string', 'max' => 255],
            [['polieksekutif'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_daftar' => 'Id Daftar',
            'nomorkartu' => 'Nomorkartu',
            'nik' => 'Nik',
            'notelp' => 'Notelp',
            'kodepoli' => 'Kodepoli',
            'nomorreferensi' => 'Nomorreferensi',
            'jenisrequest' => 'Jenisrequest',
            'polieksekutif' => 'Polieksekutif',
            'tanggalperiksa' => 'Tanggalperiksa',
            'status' => 'Status',
            'jenisreferensi' => 'Jenisreferensi',
            'nomorantrian' => 'Nomorantrian',
            'kodebooking' => 'Kodebooking',
            'jenisantrian' => 'Jenisantrian',
            'estimasidilayani' => 'Estimasidilayani',
            'namapoli' => 'Namapoli',
            'namadokter' => 'Namadokter',
            'create_time' => 'Create Time',
            'ipaddress' => 'Ipaddress',
        ];
    }
}
