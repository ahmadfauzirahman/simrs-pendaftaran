<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_sep".
 *
 * @property int $patient_id
 * @property string $bpjs_refer_no
 * @property string $bpjs_no
 * @property string $bpjs_refer_date
 * @property string|null $bpjs_date
 * @property int|null $bpjs_ppk_type
 * @property string|null $bpjs_ppk_perujuk
 * @property string|null $bpjs_catatan
 * @property string|null $bpjs_diagnosa
 * @property string|null $bpjs_jns_pelayanan
 * @property string|null $bpjs_kelas_rawat
 * @property string|null $bpjs_penjamin
 * @property string|null $bpjs_peserta_asuransi
 * @property string|null $bpjs_hak_kelas
 * @property string|null $bpjs_jns_peserta
 * @property string|null $bpjs_kelamin
 * @property string|null $bpjs_nama
 * @property string|null $bpjs_no_kartu
 * @property string|null $bpjs_no_mr
 * @property string|null $bpjs_tgl_lahir
 * @property string|null $bpjs_poli
 * @property string|null $bpjs_poli_eksekutif
 * @property int|null $bpjs_katarak
 * @property string|null $bpjs_laka_date
 * @property int|null $bpjs_laka_suplesi
 * @property string|null $bpjs_laka_suplesi_no
 * @property string|null $bpjs_laka_provinsi
 * @property string|null $bpjs_laka_kabupaten
 * @property string|null $bpjs_laka_kecamatan
 * @property string|null $no_skdp
 * @property string|null $kode_dpjp
 * @property string|null $bpjs_info_dinsos
 * @property string|null $bpjs_info_no_sktm
 * @property string|null $bpjs_info_prolanis_prb
 * @property int|null $user_id
 * @property int|null $his_registration_id
 * @property int|null $his_folio_id
 * @property string|null $trans_date
 * @property int|null $status
 * @property string|null $bpjs_discharge_date
 * @property string|null $trans_discharge_date
 * @property int|null $discharge_by
 */
class BpjsSep extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_sep';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'bpjs_refer_no', 'bpjs_no', 'bpjs_refer_date'], 'required'],
            [['patient_id', 'bpjs_ppk_type', 'bpjs_katarak', 'bpjs_laka_suplesi', 'user_id', 'his_registration_id', 'his_folio_id', 'status', 'discharge_by'], 'integer'],
            [['bpjs_refer_date', 'bpjs_date', 'bpjs_laka_date', 'trans_date', 'bpjs_discharge_date', 'trans_discharge_date'], 'safe'],
            [['bpjs_refer_no', 'bpjs_penjamin', 'bpjs_peserta_asuransi', 'bpjs_jns_peserta', 'bpjs_poli', 'bpjs_info_dinsos', 'bpjs_info_no_sktm', 'bpjs_info_prolanis_prb'], 'string', 'max' => 50],
            [['bpjs_no', 'bpjs_no_kartu', 'bpjs_no_mr', 'no_skdp'], 'string', 'max' => 20],
            [['bpjs_ppk_perujuk', 'bpjs_diagnosa', 'bpjs_nama'], 'string', 'max' => 100],
            [['bpjs_catatan'], 'string', 'max' => 250],
            [['bpjs_jns_pelayanan', 'bpjs_kelas_rawat', 'bpjs_hak_kelas', 'bpjs_laka_suplesi_no'], 'string', 'max' => 30],
            [['bpjs_kelamin', 'bpjs_tgl_lahir', 'kode_dpjp'], 'string', 'max' => 10],
            [['bpjs_poli_eksekutif'], 'string', 'max' => 5],
            [['bpjs_laka_provinsi', 'bpjs_laka_kabupaten', 'bpjs_laka_kecamatan'], 'string', 'max' => 15],
            [['patient_id', 'bpjs_refer_no', 'bpjs_no'], 'unique', 'targetAttribute' => ['patient_id', 'bpjs_refer_no', 'bpjs_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'bpjs_refer_no' => 'Bpjs Refer No',
            'bpjs_no' => 'Bpjs No',
            'bpjs_refer_date' => 'Bpjs Refer Date',
            'bpjs_date' => 'Bpjs Date',
            'bpjs_ppk_type' => 'Bpjs Ppk Type',
            'bpjs_ppk_perujuk' => 'Bpjs Ppk Perujuk',
            'bpjs_catatan' => 'Bpjs Catatan',
            'bpjs_diagnosa' => 'Bpjs Diagnosa',
            'bpjs_jns_pelayanan' => 'Bpjs Jns Pelayanan',
            'bpjs_kelas_rawat' => 'Bpjs Kelas Rawat',
            'bpjs_penjamin' => 'Bpjs Penjamin',
            'bpjs_peserta_asuransi' => 'Bpjs Peserta Asuransi',
            'bpjs_hak_kelas' => 'Bpjs Hak Kelas',
            'bpjs_jns_peserta' => 'Bpjs Jns Peserta',
            'bpjs_kelamin' => 'Bpjs Kelamin',
            'bpjs_nama' => 'Bpjs Nama',
            'bpjs_no_kartu' => 'Bpjs No Kartu',
            'bpjs_no_mr' => 'Bpjs No Mr',
            'bpjs_tgl_lahir' => 'Bpjs Tgl Lahir',
            'bpjs_poli' => 'Bpjs Poli',
            'bpjs_poli_eksekutif' => 'Bpjs Poli Eksekutif',
            'bpjs_katarak' => 'Bpjs Katarak',
            'bpjs_laka_date' => 'Bpjs Laka Date',
            'bpjs_laka_suplesi' => 'Bpjs Laka Suplesi',
            'bpjs_laka_suplesi_no' => 'Bpjs Laka Suplesi No',
            'bpjs_laka_provinsi' => 'Bpjs Laka Provinsi',
            'bpjs_laka_kabupaten' => 'Bpjs Laka Kabupaten',
            'bpjs_laka_kecamatan' => 'Bpjs Laka Kecamatan',
            'no_skdp' => 'No Skdp',
            'kode_dpjp' => 'Kode Dpjp',
            'bpjs_info_dinsos' => 'Bpjs Info Dinsos',
            'bpjs_info_no_sktm' => 'Bpjs Info No Sktm',
            'bpjs_info_prolanis_prb' => 'Bpjs Info Prolanis Prb',
            'user_id' => 'User ID',
            'his_registration_id' => 'His Registration ID',
            'his_folio_id' => 'His Folio ID',
            'trans_date' => 'Trans Date',
            'status' => 'Status',
            'bpjs_discharge_date' => 'Bpjs Discharge Date',
            'trans_discharge_date' => 'Trans Discharge Date',
            'discharge_by' => 'Discharge By',
        ];
    }
}
