<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsPpkMap;

/**
 * BpjsPpkMapSearch represents the model behind the search form of `app\models\BpjsPpkMap`.
 */
class BpjsPpkMapSearch extends BpjsPpkMap
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_ppk', 'nama_ppk', 'jenis_ppk', 'kabupaten'], 'safe'],
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
        $query = BpjsPpkMap::find();

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
        $query->andFilterWhere(['like', 'kode_ppk', $this->kode_ppk])
            ->andFilterWhere(['like', 'nama_ppk', $this->nama_ppk])
            ->andFilterWhere(['like', 'jenis_ppk', $this->jenis_ppk])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten]);

        return $dataProvider;
    }
}
