<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArInvBind;

/**
 * ArInvBindSearch represents the model behind the search form of `app\models\ArInvBind`.
 */
class ArInvBindSearch extends ArInvBind
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bind_id', 'vendor_id', 'customer_id', 'posted', 'printed', 'created_user_id', 'modified_user_id'], 'integer'],
            [['bind_no', 'bind_date', 'vendor_reference', 'return_date', 'notes', 'created_time', 'modified_time', 'customer_reference'], 'safe'],
            [['bind_amount'], 'number'],
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
        $query = ArInvBind::find();

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
            'bind_date' => $this->bind_date,
            'bind_amount' => $this->bind_amount,
            'vendor_id' => $this->vendor_id,
            'customer_id' => $this->customer_id,
            'return_date' => $this->return_date,
            'posted' => $this->posted,
            'printed' => $this->printed,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'bind_no', $this->bind_no])
            ->andFilterWhere(['like', 'vendor_reference', $this->vendor_reference])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'customer_reference', $this->customer_reference]);

        return $dataProvider;
    }
}
