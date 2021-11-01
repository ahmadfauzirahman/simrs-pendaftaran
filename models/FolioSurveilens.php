<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_surveilens".
 *
 * @property int $tindakan_id
 * @property int|null $registration_id
 * @property string|null $diagnosaMasuk
 * @property string|null $jenisTindakan
 * @property string|null $lokasi
 * @property string|null $tanggalPasang
 * @property string|null $tanggalCabut
 * @property string|null $totalHari
 * @property string|null $tanggalInfeksi
 * @property string|null $catatan
 * @property string|null $diagnosa
 * @property string|null $tanggalOperasi1
 * @property string|null $lamaOperasi1
 * @property string|null $tanggalOperasi2
 * @property string|null $lamaOperasi2
 * @property string|null $jenisOperasi
 * @property string|null $tindakanOperasi
 * @property string|null $asaScore
 * @property string|null $ido
 * @property string|null $idoHari
 * @property string|null $idoKultur
 * @property string|null $isk
 * @property string|null $iskHari
 * @property string|null $iskKultur
 * @property string|null $pneumonia
 * @property string|null $pneumoniaHari
 * @property string|null $pneumoniaKultur
 * @property string|null $iadp
 * @property string|null $iadpHari
 * @property string|null $iadpKultur
 * @property string|null $lain
 * @property string|null $lainHari
 * @property string|null $lainKultur
 * @property string|null $dosis1
 * @property string|null $jmlDosis1
 * @property string|null $tglMulaiDosis1
 * @property string|null $tglSelsaiDosis1
 * @property string|null $dosis2
 * @property string|null $jmlDosis2
 * @property string|null $tglMulaiDosis2
 * @property string|null $tglSelsaiDosis2
 * @property string|null $dosis3
 * @property string|null $jmlDosis3
 * @property string|null $tglMulaiDosis3
 * @property string|null $tglSelsaiDosis3
 * @property string|null $dosis4
 * @property string|null $jmlDosis4
 * @property string|null $tglMulaiDosis4
 * @property string|null $tglSelsaiDosis4
 * @property string|null $waktuPemberian
 * @property string|null $tglPasienKeluar
 * @property string|null $pindahRs
 * @property string|null $diagnosaTerakhir
 * @property string|null $faktorPenyakit
 * @property string|null $radiologi
 * @property string|null $labor
 */
class FolioSurveilens extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_surveilens';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id'], 'integer'],
            [['tanggalPasang', 'tanggalCabut', 'tanggalInfeksi', 'tanggalOperasi1', 'tanggalOperasi2', 'tglMulaiDosis1', 'tglSelsaiDosis1', 'tglMulaiDosis2', 'tglSelsaiDosis2', 'tglMulaiDosis3', 'tglSelsaiDosis3', 'tglMulaiDosis4', 'tglSelsaiDosis4', 'waktuPemberian', 'tglPasienKeluar'], 'safe'],
            [['diagnosaMasuk', 'jenisTindakan', 'lokasi', 'catatan', 'diagnosa', 'idoHari', 'idoKultur', 'iskHari', 'iskKultur', 'pneumoniaHari', 'pneumoniaKultur', 'iadpHari', 'iadpKultur', 'lainHari', 'lainKultur', 'dosis1', 'jmlDosis1', 'dosis2', 'jmlDosis2', 'dosis3', 'jmlDosis3', 'dosis4', 'jmlDosis4', 'pindahRs', 'diagnosaTerakhir', 'faktorPenyakit', 'radiologi', 'labor'], 'string', 'max' => 255],
            [['totalHari', 'lamaOperasi1', 'lamaOperasi2', 'jenisOperasi', 'tindakanOperasi', 'asaScore', 'ido', 'isk', 'pneumonia', 'iadp', 'lain'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tindakan_id' => 'Tindakan ID',
            'registration_id' => 'Registration ID',
            'diagnosaMasuk' => 'Diagnosa Masuk',
            'jenisTindakan' => 'Jenis Tindakan',
            'lokasi' => 'Lokasi',
            'tanggalPasang' => 'Tanggal Pasang',
            'tanggalCabut' => 'Tanggal Cabut',
            'totalHari' => 'Total Hari',
            'tanggalInfeksi' => 'Tanggal Infeksi',
            'catatan' => 'Catatan',
            'diagnosa' => 'Diagnosa',
            'tanggalOperasi1' => 'Tanggal Operasi1',
            'lamaOperasi1' => 'Lama Operasi1',
            'tanggalOperasi2' => 'Tanggal Operasi2',
            'lamaOperasi2' => 'Lama Operasi2',
            'jenisOperasi' => 'Jenis Operasi',
            'tindakanOperasi' => 'Tindakan Operasi',
            'asaScore' => 'Asa Score',
            'ido' => 'Ido',
            'idoHari' => 'Ido Hari',
            'idoKultur' => 'Ido Kultur',
            'isk' => 'Isk',
            'iskHari' => 'Isk Hari',
            'iskKultur' => 'Isk Kultur',
            'pneumonia' => 'Pneumonia',
            'pneumoniaHari' => 'Pneumonia Hari',
            'pneumoniaKultur' => 'Pneumonia Kultur',
            'iadp' => 'Iadp',
            'iadpHari' => 'Iadp Hari',
            'iadpKultur' => 'Iadp Kultur',
            'lain' => 'Lain',
            'lainHari' => 'Lain Hari',
            'lainKultur' => 'Lain Kultur',
            'dosis1' => 'Dosis1',
            'jmlDosis1' => 'Jml Dosis1',
            'tglMulaiDosis1' => 'Tgl Mulai Dosis1',
            'tglSelsaiDosis1' => 'Tgl Selsai Dosis1',
            'dosis2' => 'Dosis2',
            'jmlDosis2' => 'Jml Dosis2',
            'tglMulaiDosis2' => 'Tgl Mulai Dosis2',
            'tglSelsaiDosis2' => 'Tgl Selsai Dosis2',
            'dosis3' => 'Dosis3',
            'jmlDosis3' => 'Jml Dosis3',
            'tglMulaiDosis3' => 'Tgl Mulai Dosis3',
            'tglSelsaiDosis3' => 'Tgl Selsai Dosis3',
            'dosis4' => 'Dosis4',
            'jmlDosis4' => 'Jml Dosis4',
            'tglMulaiDosis4' => 'Tgl Mulai Dosis4',
            'tglSelsaiDosis4' => 'Tgl Selsai Dosis4',
            'waktuPemberian' => 'Waktu Pemberian',
            'tglPasienKeluar' => 'Tgl Pasien Keluar',
            'pindahRs' => 'Pindah Rs',
            'diagnosaTerakhir' => 'Diagnosa Terakhir',
            'faktorPenyakit' => 'Faktor Penyakit',
            'radiologi' => 'Radiologi',
            'labor' => 'Labor',
        ];
    }
}
