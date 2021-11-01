<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kirimlis".
 *
 * @property int $kode
 * @property string|null $modified_date
 * @property string|null $No_Pasien
 * @property string|null $Kode_Kunjungan
 * @property string|null $Nama
 * @property string|null $Email
 * @property string|null $Date_of_birth
 * @property int|null $UmurTahun
 * @property int|null $UmurBulan
 * @property int|null $UmurHari
 * @property string|null $Gender
 * @property string|null $Alamat
 * @property string|null $Diagnosa
 * @property string|null $Tgl_Periksa
 * @property string|null $Pengirim
 * @property string|null $pengirim_name
 * @property string|null $Kelas
 * @property string|null $kelas_name
 * @property string|null $Ruang
 * @property string|null $ruang_name
 * @property string|null $Cara_Bayar
 * @property string|null $cara_bayar_name
 * @property string|null $Kode_Tarif
 * @property string|null $IS_Inap
 * @property string|null $Status
 * @property string|null $is_update
 * @property string|null $reg_no
 * @property string|null $labp_id
 * @property string|null $lp_id
 * @property string|null $lab_id
 * @property int|null $id_tmp
 */
class Kirimlis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kirimlis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UmurTahun', 'UmurBulan', 'UmurHari', 'id_tmp'], 'integer'],
            [['modified_date', 'Date_of_birth', 'Tgl_Periksa', 'reg_no', 'labp_id', 'lp_id', 'lab_id'], 'string', 'max' => 32],
            [['No_Pasien', 'Email'], 'string', 'max' => 50],
            [['Kode_Kunjungan', 'Pengirim', 'Kelas', 'Ruang', 'Cara_Bayar', 'Kode_Tarif'], 'string', 'max' => 22],
            [['Nama', 'Alamat'], 'string', 'max' => 200],
            [['Gender', 'IS_Inap', 'Status', 'is_update'], 'string', 'max' => 1],
            [['Diagnosa'], 'string', 'max' => 100],
            [['pengirim_name', 'kelas_name', 'ruang_name', 'cara_bayar_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'modified_date' => 'Modified Date',
            'No_Pasien' => 'No  Pasien',
            'Kode_Kunjungan' => 'Kode  Kunjungan',
            'Nama' => 'Nama',
            'Email' => 'Email',
            'Date_of_birth' => 'Date Of Birth',
            'UmurTahun' => 'Umur Tahun',
            'UmurBulan' => 'Umur Bulan',
            'UmurHari' => 'Umur Hari',
            'Gender' => 'Gender',
            'Alamat' => 'Alamat',
            'Diagnosa' => 'Diagnosa',
            'Tgl_Periksa' => 'Tgl  Periksa',
            'Pengirim' => 'Pengirim',
            'pengirim_name' => 'Pengirim Name',
            'Kelas' => 'Kelas',
            'kelas_name' => 'Kelas Name',
            'Ruang' => 'Ruang',
            'ruang_name' => 'Ruang Name',
            'Cara_Bayar' => 'Cara  Bayar',
            'cara_bayar_name' => 'Cara Bayar Name',
            'Kode_Tarif' => 'Kode  Tarif',
            'IS_Inap' => 'Is  Inap',
            'Status' => 'Status',
            'is_update' => 'Is Update',
            'reg_no' => 'Reg No',
            'labp_id' => 'Labp ID',
            'lp_id' => 'Lp ID',
            'lab_id' => 'Lab ID',
            'id_tmp' => 'Id Tmp',
        ];
    }
}
