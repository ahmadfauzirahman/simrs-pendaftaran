<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NPrequest;

/**
 * NPrequestSearch represents the model behind the search form of `app\models\NPrequest`.
 */
class NPrequestSearch extends NPrequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['request_id', 'warehouse_id', 'request_status', 'order_id', 'num_of_orders'], 'integer'],
            [['request_no', 'request_date', 'requested_by', 'request_notes', 'requested_date', 'notes'], 'safe'],
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
        $query = NPrequest::find();

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
            'request_id' => $this->request_id,
            'warehouse_id' => $this->warehouse_id,
            'request_date' => $this->request_date,
            'request_status' => $this->request_status,
            'requested_date' => $this->requested_date,
            'order_id' => $this->order_id,
            'num_of_orders' => $this->num_of_orders,
        ]);

        $query->andFilterWhere(['like', 'request_no', $this->request_no])
            ->andFilterWhere(['like', 'requested_by', $this->requested_by])
            ->andFilterWhere(['like', 'request_notes', $this->request_notes])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
