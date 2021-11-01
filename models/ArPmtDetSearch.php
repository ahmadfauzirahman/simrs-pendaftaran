<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArPmtDet;

/**
 * ArPmtDetSearch represents the model behind the search form of `app\models\ArPmtDet`.
 */
class ArPmtDetSearch extends ArPmtDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'seq', 'invoice_id'], 'integer'],
            [['payment_amount', 'rounding_amount', 'discount_amount', 'writeoff_amount', 'exchange_rate'], 'number'],
            [['remark'], 'safe'],
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
        $query = ArPmtDet::find();

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
            'invoice_id' => $this->invoice_id,
            'payment_amount' => $this->payment_amount,
            'rounding_amount' => $this->rounding_amount,
            'discount_amount' => $this->discount_amount,
            'writeoff_amount' => $this->writeoff_amount,
            'exchange_rate' => $this->exchange_rate,
        ]);

        $query->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
