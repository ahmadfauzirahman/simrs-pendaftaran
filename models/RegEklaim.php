<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_eklaim".
 *
 * @property int $registration_id
 * @property string|null $jns_rawat
 * @property string|null $dat_icd_code
 * @property string|null $dat_icd
 * @property string|null $dat_proc_code
 * @property string|null $dat_proc
 * @property string|null $tgl_masuk
 * @property string|null $tgl_keluar
 * @property string|null $unit_name
 * @property string|null $sub_unit_name
 * @property float|null $billing
 * @property float|null $prosedur_non_bedah
 * @property float|null $prosedur_bedah
 * @property float|null $konsultasi
 * @property float|null $tenaga_ahli
 * @property float|null $perawatan
 * @property float|null $penunjang
 * @property float|null $radiologi
 * @property float|null $laboratorium
 * @property float|null $pelayanan_darah
 * @property float|null $rehabilitasi
 * @property float|null $kamar
 * @property float|null $rawat_intensif
 * @property float|null $obat
 * @property float|null $obat_kronis
 * @property float|null $obat_kemoterapi
 * @property float|null $alkes
 * @property float|null $bmhp
 * @property float|null $sewa_alat
 * @property string|null $kelas_rawat
 * @property int|null $adl_sub_acute
 * @property int|null $adl_chronic
 * @property int|null $icu_indikator
 * @property int|null $icu_los
 * @property float|null $ventilator_hour
 * @property int|null $upgrade_class_ind
 * @property string|null $upgrade_class_class
 * @property int|null $upgrade_class_los
 * @property float|null $add_payment_pct
 * @property float|null $birth_weight
 * @property int|null $discharge_status
 * @property float|null $tarif_rs
 * @property float|null $tarif_poli_eks
 * @property string|null $nama_dokter
 * @property string|null $kode_tarif
 * @property int|null $payor_id
 * @property string|null $payor_cd
 * @property string|null $cob_cd
 * @property string|null $coder_nik
 * @property int|null $create_claim
 * @property int|null $update_patient
 * @property int|null $delete_claim
 * @property int|null $delete_patient
 * @property int|null $fill_claim
 * @property int|null $grouper_st1
 * @property int|null $grouper_st2
 * @property string|null $grouper_st1_value
 * @property string|null $grouper_cmg_value
 * @property string|null $grouper_st2_value
 * @property int|null $finalize_claim
 * @property int|null $reedit_claim
 * @property int|null $send_claim
 * @property int|null $status_claim
 * @property string|null $status_claim_value
 * @property int|null $pdf_claim
 * @property string|null $pdf_claim_value
 * @property int|null $detail_claim
 * @property string|null $detail_claim_value
 * @property string|null $create_claim_time
 * @property string|null $update_patient_time
 * @property string|null $delete_claim_time
 * @property string|null $delete_patient_time
 * @property string|null $fill_claim_time
 * @property string|null $grouper_st1_time
 * @property string|null $grouper_st2_time
 * @property string|null $finalize_claim_time
 * @property string|null $reedit_claim_time
 * @property string|null $send_claim_time
 * @property string|null $status_claim_time
 * @property string|null $pdf_claim_time
 * @property string|null $detail_claim_time
 */
class RegEklaim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_eklaim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id'], 'required'],
            [['registration_id', 'adl_sub_acute', 'adl_chronic', 'icu_indikator', 'icu_los', 'upgrade_class_ind', 'upgrade_class_los', 'discharge_status', 'payor_id', 'create_claim', 'update_patient', 'delete_claim', 'delete_patient', 'fill_claim', 'grouper_st1', 'grouper_st2', 'finalize_claim', 'reedit_claim', 'send_claim', 'status_claim', 'pdf_claim', 'detail_claim'], 'integer'],
            [['dat_icd', 'dat_proc', 'grouper_st1_value', 'grouper_cmg_value', 'grouper_st2_value', 'status_claim_value', 'pdf_claim_value', 'detail_claim_value'], 'string'],
            [['tgl_masuk', 'tgl_keluar', 'create_claim_time', 'update_patient_time', 'delete_claim_time', 'delete_patient_time', 'fill_claim_time', 'grouper_st1_time', 'grouper_st2_time', 'finalize_claim_time', 'reedit_claim_time', 'send_claim_time', 'status_claim_time', 'pdf_claim_time', 'detail_claim_time'], 'safe'],
            [['billing', 'prosedur_non_bedah', 'prosedur_bedah', 'konsultasi', 'tenaga_ahli', 'perawatan', 'penunjang', 'radiologi', 'laboratorium', 'pelayanan_darah', 'rehabilitasi', 'kamar', 'rawat_intensif', 'obat', 'obat_kronis', 'obat_kemoterapi', 'alkes', 'bmhp', 'sewa_alat', 'ventilator_hour', 'add_payment_pct', 'birth_weight', 'tarif_rs', 'tarif_poli_eks'], 'number'],
            [['jns_rawat', 'kelas_rawat', 'upgrade_class_class', 'kode_tarif', 'payor_cd', 'cob_cd'], 'string', 'max' => 20],
            [['dat_icd_code', 'dat_proc_code', 'unit_name', 'sub_unit_name', 'nama_dokter'], 'string', 'max' => 50],
            [['coder_nik'], 'string', 'max' => 32],
            [['registration_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'registration_id' => 'Registration ID',
            'jns_rawat' => 'Jns Rawat',
            'dat_icd_code' => 'Dat Icd Code',
            'dat_icd' => 'Dat Icd',
            'dat_proc_code' => 'Dat Proc Code',
            'dat_proc' => 'Dat Proc',
            'tgl_masuk' => 'Tgl Masuk',
            'tgl_keluar' => 'Tgl Keluar',
            'unit_name' => 'Unit Name',
            'sub_unit_name' => 'Sub Unit Name',
            'billing' => 'Billing',
            'prosedur_non_bedah' => 'Prosedur Non Bedah',
            'prosedur_bedah' => 'Prosedur Bedah',
            'konsultasi' => 'Konsultasi',
            'tenaga_ahli' => 'Tenaga Ahli',
            'perawatan' => 'Perawatan',
            'penunjang' => 'Penunjang',
            'radiologi' => 'Radiologi',
            'laboratorium' => 'Laboratorium',
            'pelayanan_darah' => 'Pelayanan Darah',
            'rehabilitasi' => 'Rehabilitasi',
            'kamar' => 'Kamar',
            'rawat_intensif' => 'Rawat Intensif',
            'obat' => 'Obat',
            'obat_kronis' => 'Obat Kronis',
            'obat_kemoterapi' => 'Obat Kemoterapi',
            'alkes' => 'Alkes',
            'bmhp' => 'Bmhp',
            'sewa_alat' => 'Sewa Alat',
            'kelas_rawat' => 'Kelas Rawat',
            'adl_sub_acute' => 'Adl Sub Acute',
            'adl_chronic' => 'Adl Chronic',
            'icu_indikator' => 'Icu Indikator',
            'icu_los' => 'Icu Los',
            'ventilator_hour' => 'Ventilator Hour',
            'upgrade_class_ind' => 'Upgrade Class Ind',
            'upgrade_class_class' => 'Upgrade Class Class',
            'upgrade_class_los' => 'Upgrade Class Los',
            'add_payment_pct' => 'Add Payment Pct',
            'birth_weight' => 'Birth Weight',
            'discharge_status' => 'Discharge Status',
            'tarif_rs' => 'Tarif Rs',
            'tarif_poli_eks' => 'Tarif Poli Eks',
            'nama_dokter' => 'Nama Dokter',
            'kode_tarif' => 'Kode Tarif',
            'payor_id' => 'Payor ID',
            'payor_cd' => 'Payor Cd',
            'cob_cd' => 'Cob Cd',
            'coder_nik' => 'Coder Nik',
            'create_claim' => 'Create Claim',
            'update_patient' => 'Update Patient',
            'delete_claim' => 'Delete Claim',
            'delete_patient' => 'Delete Patient',
            'fill_claim' => 'Fill Claim',
            'grouper_st1' => 'Grouper St1',
            'grouper_st2' => 'Grouper St2',
            'grouper_st1_value' => 'Grouper St1 Value',
            'grouper_cmg_value' => 'Grouper Cmg Value',
            'grouper_st2_value' => 'Grouper St2 Value',
            'finalize_claim' => 'Finalize Claim',
            'reedit_claim' => 'Reedit Claim',
            'send_claim' => 'Send Claim',
            'status_claim' => 'Status Claim',
            'status_claim_value' => 'Status Claim Value',
            'pdf_claim' => 'Pdf Claim',
            'pdf_claim_value' => 'Pdf Claim Value',
            'detail_claim' => 'Detail Claim',
            'detail_claim_value' => 'Detail Claim Value',
            'create_claim_time' => 'Create Claim Time',
            'update_patient_time' => 'Update Patient Time',
            'delete_claim_time' => 'Delete Claim Time',
            'delete_patient_time' => 'Delete Patient Time',
            'fill_claim_time' => 'Fill Claim Time',
            'grouper_st1_time' => 'Grouper St1 Time',
            'grouper_st2_time' => 'Grouper St2 Time',
            'finalize_claim_time' => 'Finalize Claim Time',
            'reedit_claim_time' => 'Reedit Claim Time',
            'send_claim_time' => 'Send Claim Time',
            'status_claim_time' => 'Status Claim Time',
            'pdf_claim_time' => 'Pdf Claim Time',
            'detail_claim_time' => 'Detail Claim Time',
        ];
    }
}
