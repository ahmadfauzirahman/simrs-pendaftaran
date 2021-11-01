<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BedAvailableBpjs;

/**
 * BedAvailableBpjsSearch represents the model behind the search form of `app\models\BedAvailableBpjs`.
 */
class BedAvailableBpjsSearch extends BedAvailableBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kodekelas', 'koderuang', 'namakelas', 'namaruang', 'created_time', 'modified_time'], 'safe'],
            [['kapasitas', 'tersedia', 'tersediapria', 'tersediawanita', 'tersediapriawanita', 'synchronize', 'created_user_id', 'modified_user_id'], 'integer'],
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
        $query = BedAvailableBpjs::find();

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
            'kapasitas' => $this->kapasitas,
            'tersedia' => $this->tersedia,
            'tersediapria' => $this->tersediapria,
            'tersediawanita' => $this->tersediawanita,
            'tersediapriawanita' => $this->tersediapriawanita,
            'synchronize' => $this->synchronize,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'kodekelas', $this->kodekelas])
            ->andFilterWhere(['like', 'koderuang', $this->koderuang])
            ->andFilterWhere(['like', 'namakelas', $this->namakelas])
            ->andFilterWhere(['like', 'namaruang', $this->namaruang]);

        return $dataProvider;
    }
}
