<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Daftar;

/**
 * DaftarSearch represents the model behind the search form of `app\models\Daftar`.
 */
class DaftarSearch extends Daftar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_daftar', 'jenisrequest', 'status', 'jenisreferensi', 'nomorantrian', 'jenisantrian'], 'integer'],
            [['nomorkartu', 'nik', 'notelp', 'kodepoli', 'nomorreferensi', 'polieksekutif', 'tanggalperiksa', 'kodebooking', 'estimasidilayani', 'namapoli', 'namadokter', 'create_time', 'ipaddress'], 'safe'],
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
        $query = Daftar::find();

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
            'id_daftar' => $this->id_daftar,
            'jenisrequest' => $this->jenisrequest,
            'tanggalperiksa' => $this->tanggalperiksa,
            'status' => $this->status,
            'jenisreferensi' => $this->jenisreferensi,
            'nomorantrian' => $this->nomorantrian,
            'jenisantrian' => $this->jenisantrian,
            'estimasidilayani' => $this->estimasidilayani,
            'create_time' => $this->create_time,
        ]);

        $query->andFilterWhere(['like', 'nomorkartu', $this->nomorkartu])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'notelp', $this->notelp])
            ->andFilterWhere(['like', 'kodepoli', $this->kodepoli])
            ->andFilterWhere(['like', 'nomorreferensi', $this->nomorreferensi])
            ->andFilterWhere(['like', 'polieksekutif', $this->polieksekutif])
            ->andFilterWhere(['like', 'kodebooking', $this->kodebooking])
            ->andFilterWhere(['like', 'namapoli', $this->namapoli])
            ->andFilterWhere(['like', 'namadokter', $this->namadokter])
            ->andFilterWhere(['like', 'ipaddress', $this->ipaddress]);

        return $dataProvider;
    }
}
