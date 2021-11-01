<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaymentClaimList;

/**
 * PaymentClaimListSearch represents the model behind the search form of `app\models\PaymentClaimList`.
 */
class PaymentClaimListSearch extends PaymentClaimList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'seq'], 'integer'],
            [['claim_no', 'claim_name'], 'safe'],
            [['claim_value'], 'number'],
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
        $query = PaymentClaimList::find();

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
            'payment_id' => $this->payment_id,
            'seq' => $this->seq,
            'claim_value' => $this->claim_value,
        ]);

        $query->andFilterWhere(['like', 'claim_no', $this->claim_no])
            ->andFilterWhere(['like', 'claim_name', $this->claim_name]);

        return $dataProvider;
    }
}
