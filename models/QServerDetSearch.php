<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QServerDet;

/**
 * QServerDetSearch represents the model behind the search form of `app\models\QServerDet`.
 */
class QServerDetSearch extends QServerDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_server_id', 'seq', 'sub_unit_id'], 'integer'],
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
        $query = QServerDet::find();

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
            'q_server_id' => $this->q_server_id,
            'seq' => $this->seq,
            'sub_unit_id' => $this->sub_unit_id,
        ]);

        return $dataProvider;
    }
}
