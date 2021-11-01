<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Regeklaim;

/**
 * RegEklaimSearch represents the model behind the search form of `app\models\Regeklaim`.
 */
class RegEklaimSearch extends Regeklaim
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registration_id', 'adl_sub_acute', 'adl_chronic', 'icu_indikator', 'icu_los', 'upgrade_class_ind', 'upgrade_class_los', 'discharge_status', 'payor_id', 'create_claim', 'update_patient', 'delete_claim', 'delete_patient', 'fill_claim', 'grouper_st1', 'grouper_st2', 'finalize_claim', 'reedit_claim', 'send_claim', 'status_claim', 'pdf_claim', 'detail_claim'], 'integer'],
            [['jns_rawat', 'dat_icd_code', 'dat_icd', 'dat_proc_code', 'dat_proc', 'tgl_masuk', 'tgl_keluar', 'unit_name', 'sub_unit_name', 'kelas_rawat', 'upgrade_class_class', 'nama_dokter', 'kode_tarif', 'payor_cd', 'cob_cd', 'coder_nik', 'grouper_st1_value', 'grouper_cmg_value', 'grouper_st2_value', 'status_claim_value', 'pdf_claim_value', 'detail_claim_value', 'create_claim_time', 'update_patient_time', 'delete_claim_time', 'delete_patient_time', 'fill_claim_time', 'grouper_st1_time', 'grouper_st2_time', 'finalize_claim_time', 'reedit_claim_time', 'send_claim_time', 'status_claim_time', 'pdf_claim_time', 'detail_claim_time'], 'safe'],
            [['billing', 'prosedur_non_bedah', 'prosedur_bedah', 'konsultasi', 'tenaga_ahli', 'perawatan', 'penunjang', 'radiologi', 'laboratorium', 'pelayanan_darah', 'rehabilitasi', 'kamar', 'rawat_intensif', 'obat', 'obat_kronis', 'obat_kemoterapi', 'alkes', 'bmhp', 'sewa_alat', 'ventilator_hour', 'add_payment_pct', 'birth_weight', 'tarif_rs', 'tarif_poli_eks'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Regeklaim::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'registration_id' => $this->registration_id,
            'tgl_masuk' => $this->tgl_masuk,
            'tgl_keluar' => $this->tgl_keluar,
            'billing' => $this->billing,
            'prosedur_non_bedah' => $this->prosedur_non_bedah,
            'prosedur_bedah' => $this->prosedur_bedah,
            'konsultasi' => $this->konsultasi,
            'tenaga_ahli' => $this->tenaga_ahli,
            'perawatan' => $this->perawatan,
            'penunjang' => $this->penunjang,
            'radiologi' => $this->radiologi,
            'laboratorium' => $this->laboratorium,
            'pelayanan_darah' => $this->pelayanan_darah,
            'rehabilitasi' => $this->rehabilitasi,
            'kamar' => $this->kamar,
            'rawat_intensif' => $this->rawat_intensif,
            'obat' => $this->obat,
            'obat_kronis' => $this->obat_kronis,
            'obat_kemoterapi' => $this->obat_kemoterapi,
            'alkes' => $this->alkes,
            'bmhp' => $this->bmhp,
            'sewa_alat' => $this->sewa_alat,
            'adl_sub_acute' => $this->adl_sub_acute,
            'adl_chronic' => $this->adl_chronic,
            'icu_indikator' => $this->icu_indikator,
            'icu_los' => $this->icu_los,
            'ventilator_hour' => $this->ventilator_hour,
            'upgrade_class_ind' => $this->upgrade_class_ind,
            'upgrade_class_los' => $this->upgrade_class_los,
            'add_payment_pct' => $this->add_payment_pct,
            'birth_weight' => $this->birth_weight,
            'discharge_status' => $this->discharge_status,
            'tarif_rs' => $this->tarif_rs,
            'tarif_poli_eks' => $this->tarif_poli_eks,
            'payor_id' => $this->payor_id,
            'create_claim' => $this->create_claim,
            'update_patient' => $this->update_patient,
            'delete_claim' => $this->delete_claim,
            'delete_patient' => $this->delete_patient,
            'fill_claim' => $this->fill_claim,
            'grouper_st1' => $this->grouper_st1,
            'grouper_st2' => $this->grouper_st2,
            'finalize_claim' => $this->finalize_claim,
            'reedit_claim' => $this->reedit_claim,
            'send_claim' => $this->send_claim,
            'status_claim' => $this->status_claim,
            'pdf_claim' => $this->pdf_claim,
            'detail_claim' => $this->detail_claim,
            'create_claim_time' => $this->create_claim_time,
            'update_patient_time' => $this->update_patient_time,
            'delete_claim_time' => $this->delete_claim_time,
            'delete_patient_time' => $this->delete_patient_time,
            'fill_claim_time' => $this->fill_claim_time,
            'grouper_st1_time' => $this->grouper_st1_time,
            'grouper_st2_time' => $this->grouper_st2_time,
            'finalize_claim_time' => $this->finalize_claim_time,
            'reedit_claim_time' => $this->reedit_claim_time,
            'send_claim_time' => $this->send_claim_time,
            'status_claim_time' => $this->status_claim_time,
            'pdf_claim_time' => $this->pdf_claim_time,
            'detail_claim_time' => $this->detail_claim_time,
        ]);

        $query->andFilterWhere(['like', 'jns_rawat', $this->jns_rawat])
            ->andFilterWhere(['like', 'dat_icd_code', $this->dat_icd_code])
            ->andFilterWhere(['like', 'dat_icd', $this->dat_icd])
            ->andFilterWhere(['like', 'dat_proc_code', $this->dat_proc_code])
            ->andFilterWhere(['like', 'dat_proc', $this->dat_proc])
            ->andFilterWhere(['like', 'unit_name', $this->unit_name])
            ->andFilterWhere(['like', 'sub_unit_name', $this->sub_unit_name])
            ->andFilterWhere(['like', 'kelas_rawat', $this->kelas_rawat])
            ->andFilterWhere(['like', 'upgrade_class_class', $this->upgrade_class_class])
            ->andFilterWhere(['like', 'nama_dokter', $this->nama_dokter])
            ->andFilterWhere(['like', 'kode_tarif', $this->kode_tarif])
            ->andFilterWhere(['like', 'payor_cd', $this->payor_cd])
            ->andFilterWhere(['like', 'cob_cd', $this->cob_cd])
            ->andFilterWhere(['like', 'coder_nik', $this->coder_nik])
            ->andFilterWhere(['like', 'grouper_st1_value', $this->grouper_st1_value])
            ->andFilterWhere(['like', 'grouper_cmg_value', $this->grouper_cmg_value])
            ->andFilterWhere(['like', 'grouper_st2_value', $this->grouper_st2_value])
            ->andFilterWhere(['like', 'status_claim_value', $this->status_claim_value])
            ->andFilterWhere(['like', 'pdf_claim_value', $this->pdf_claim_value])
            ->andFilterWhere(['like', 'detail_claim_value', $this->detail_claim_value]);

        return $dataProvider;
    }
}
