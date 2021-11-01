<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kirimlis;

/**
 * KirimlisSearch represents the model behind the search form of `app\models\Kirimlis`.
 */
class KirimlisSearch extends Kirimlis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode', 'UmurTahun', 'UmurBulan', 'UmurHari', 'id_tmp'], 'integer'],
            [['modified_date', 'No_Pasien', 'Kode_Kunjungan', 'Nama', 'Email', 'Date_of_birth', 'Gender', 'Alamat', 'Diagnosa', 'Tgl_Periksa', 'Pengirim', 'pengirim_name', 'Kelas', 'kelas_name', 'Ruang', 'ruang_name', 'Cara_Bayar', 'cara_bayar_name', 'Kode_Tarif', 'IS_Inap', 'Status', 'is_update', 'reg_no', 'labp_id', 'lp_id', 'lab_id'], 'safe'],
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
        $query = Kirimlis::find();

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
            'kode' => $this->kode,
            'UmurTahun' => $this->UmurTahun,
            'UmurBulan' => $this->UmurBulan,
            'UmurHari' => $this->UmurHari,
            'id_tmp' => $this->id_tmp,
        ]);

        $query->andFilterWhere(['like', 'modified_date', $this->modified_date])
            ->andFilterWhere(['like', 'No_Pasien', $this->No_Pasien])
            ->andFilterWhere(['like', 'Kode_Kunjungan', $this->Kode_Kunjungan])
            ->andFilterWhere(['like', 'Nama', $this->Nama])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Date_of_birth', $this->Date_of_birth])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Diagnosa', $this->Diagnosa])
            ->andFilterWhere(['like', 'Tgl_Periksa', $this->Tgl_Periksa])
            ->andFilterWhere(['like', 'Pengirim', $this->Pengirim])
            ->andFilterWhere(['like', 'pengirim_name', $this->pengirim_name])
            ->andFilterWhere(['like', 'Kelas', $this->Kelas])
            ->andFilterWhere(['like', 'kelas_name', $this->kelas_name])
            ->andFilterWhere(['like', 'Ruang', $this->Ruang])
            ->andFilterWhere(['like', 'ruang_name', $this->ruang_name])
            ->andFilterWhere(['like', 'Cara_Bayar', $this->Cara_Bayar])
            ->andFilterWhere(['like', 'cara_bayar_name', $this->cara_bayar_name])
            ->andFilterWhere(['like', 'Kode_Tarif', $this->Kode_Tarif])
            ->andFilterWhere(['like', 'IS_Inap', $this->IS_Inap])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'is_update', $this->is_update])
            ->andFilterWhere(['like', 'reg_no', $this->reg_no])
            ->andFilterWhere(['like', 'labp_id', $this->labp_id])
            ->andFilterWhere(['like', 'lp_id', $this->lp_id])
            ->andFilterWhere(['like', 'lab_id', $this->lab_id]);

        return $dataProvider;
    }
}
