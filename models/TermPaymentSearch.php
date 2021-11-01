<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TermPayment;

/**
 * TermPaymentSearch represents the model behind the search form of `app\models\TermPayment`.
 */
class TermPaymentSearch extends TermPayment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['term_payment_id', 'disc_days', 'net_days', 'cod', 'created_user_id', 'modified_user_id'], 'integer'],
            [['description', 'created_time', 'modified_time'], 'safe'],
            [['disc_pc'], 'number'],
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
        $query = TermPayment::find();

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
            'term_payment_id' => $this->term_payment_id,
            'disc_days' => $this->disc_days,
            'disc_pc' => $this->disc_pc,
            'net_days' => $this->net_days,
            'cod' => $this->cod,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
