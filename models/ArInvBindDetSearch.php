<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArInvBindDet;

/**
 * ArInvBindDetSearch represents the model behind the search form of `app\models\ArInvBindDet`.
 */
class ArInvBindDetSearch extends ArInvBindDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bind_id', 'seq', 'invoice_id', 'customer_reference'], 'integer'],
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
        $query = ArInvBindDet::find();

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
            'bind_id' => $this->bind_id,
            'seq' => $this->seq,
            'invoice_id' => $this->invoice_id,
            'customer_reference' => $this->customer_reference,
        ]);

        return $dataProvider;
    }
}
