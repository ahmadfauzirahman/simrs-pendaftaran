<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsSep;

/**
 * BpjsSepSearch represents the model behind the search form of `app\models\BpjsSep`.
 */
class BpjsSepSearch extends BpjsSep
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'bpjs_ppk_type', 'bpjs_katarak', 'bpjs_laka_suplesi', 'user_id', 'his_registration_id', 'his_folio_id', 'status', 'discharge_by'], 'integer'],
            [['bpjs_refer_no', 'bpjs_no', 'bpjs_refer_date', 'bpjs_date', 'bpjs_ppk_perujuk', 'bpjs_catatan', 'bpjs_diagnosa', 'bpjs_jns_pelayanan', 'bpjs_kelas_rawat', 'bpjs_penjamin', 'bpjs_peserta_asuransi', 'bpjs_hak_kelas', 'bpjs_jns_peserta', 'bpjs_kelamin', 'bpjs_nama', 'bpjs_no_kartu', 'bpjs_no_mr', 'bpjs_tgl_lahir', 'bpjs_poli', 'bpjs_poli_eksekutif', 'bpjs_laka_date', 'bpjs_laka_suplesi_no', 'bpjs_laka_provinsi', 'bpjs_laka_kabupaten', 'bpjs_laka_kecamatan', 'no_skdp', 'kode_dpjp', 'bpjs_info_dinsos', 'bpjs_info_no_sktm', 'bpjs_info_prolanis_prb', 'trans_date', 'bpjs_discharge_date', 'trans_discharge_date'], 'safe'],
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
        $query = BpjsSep::find();

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
            'patient_id' => $this->patient_id,
            'bpjs_refer_date' => $this->bpjs_refer_date,
            'bpjs_date' => $this->bpjs_date,
            'bpjs_ppk_type' => $this->bpjs_ppk_type,
            'bpjs_katarak' => $this->bpjs_katarak,
            'bpjs_laka_date' => $this->bpjs_laka_date,
            'bpjs_laka_suplesi' => $this->bpjs_laka_suplesi,
            'user_id' => $this->user_id,
            'his_registration_id' => $this->his_registration_id,
            'his_folio_id' => $this->his_folio_id,
            'trans_date' => $this->trans_date,
            'status' => $this->status,
            'bpjs_discharge_date' => $this->bpjs_discharge_date,
            'trans_discharge_date' => $this->trans_discharge_date,
            'discharge_by' => $this->discharge_by,
        ]);

        $query->andFilterWhere(['like', 'bpjs_refer_no', $this->bpjs_refer_no])
            ->andFilterWhere(['like', 'bpjs_no', $this->bpjs_no])
            ->andFilterWhere(['like', 'bpjs_ppk_perujuk', $this->bpjs_ppk_perujuk])
            ->andFilterWhere(['like', 'bpjs_catatan', $this->bpjs_catatan])
            ->andFilterWhere(['like', 'bpjs_diagnosa', $this->bpjs_diagnosa])
            ->andFilterWhere(['like', 'bpjs_jns_pelayanan', $this->bpjs_jns_pelayanan])
            ->andFilterWhere(['like', 'bpjs_kelas_rawat', $this->bpjs_kelas_rawat])
            ->andFilterWhere(['like', 'bpjs_penjamin', $this->bpjs_penjamin])
            ->andFilterWhere(['like', 'bpjs_peserta_asuransi', $this->bpjs_peserta_asuransi])
            ->andFilterWhere(['like', 'bpjs_hak_kelas', $this->bpjs_hak_kelas])
            ->andFilterWhere(['like', 'bpjs_jns_peserta', $this->bpjs_jns_peserta])
            ->andFilterWhere(['like', 'bpjs_kelamin', $this->bpjs_kelamin])
            ->andFilterWhere(['like', 'bpjs_nama', $this->bpjs_nama])
            ->andFilterWhere(['like', 'bpjs_no_kartu', $this->bpjs_no_kartu])
            ->andFilterWhere(['like', 'bpjs_no_mr', $this->bpjs_no_mr])
            ->andFilterWhere(['like', 'bpjs_tgl_lahir', $this->bpjs_tgl_lahir])
            ->andFilterWhere(['like', 'bpjs_poli', $this->bpjs_poli])
            ->andFilterWhere(['like', 'bpjs_poli_eksekutif', $this->bpjs_poli_eksekutif])
            ->andFilterWhere(['like', 'bpjs_laka_suplesi_no', $this->bpjs_laka_suplesi_no])
            ->andFilterWhere(['like', 'bpjs_laka_provinsi', $this->bpjs_laka_provinsi])
            ->andFilterWhere(['like', 'bpjs_laka_kabupaten', $this->bpjs_laka_kabupaten])
            ->andFilterWhere(['like', 'bpjs_laka_kecamatan', $this->bpjs_laka_kecamatan])
            ->andFilterWhere(['like', 'no_skdp', $this->no_skdp])
            ->andFilterWhere(['like', 'kode_dpjp', $this->kode_dpjp])
            ->andFilterWhere(['like', 'bpjs_info_dinsos', $this->bpjs_info_dinsos])
            ->andFilterWhere(['like', 'bpjs_info_no_sktm', $this->bpjs_info_no_sktm])
            ->andFilterWhere(['like', 'bpjs_info_prolanis_prb', $this->bpjs_info_prolanis_prb]);

        return $dataProvider;
    }
}
