<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\JknOperasi;

/**
 * JknOperasiSearch represents the model behind the search form of `app\models\JknOperasi`.
 */
class JknOperasiSearch extends JknOperasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idoperasi', 'terlaksana', 'patient_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['nomorkartu', 'kodebooking', 'tanggaloperasi', 'jenistindakan', 'kodepoli', 'namapoli', 'created_time', 'modified_time'], 'safe'],
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
        $query = JknOperasi::find();

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
            'idoperasi' => $this->idoperasi,
            'tanggaloperasi' => $this->tanggaloperasi,
            'terlaksana' => $this->terlaksana,
            'patient_id' => $this->patient_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'nomorkartu', $this->nomorkartu])
            ->andFilterWhere(['like', 'kodebooking', $this->kodebooking])
            ->andFilterWhere(['like', 'jenistindakan', $this->jenistindakan])
            ->andFilterWhere(['like', 'kodepoli', $this->kodepoli])
            ->andFilterWhere(['like', 'namapoli', $this->namapoli]);

        return $dataProvider;
    }
}
