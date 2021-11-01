<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExtBillNo;

/**
 * ExtBillNoSearch represents the model behind the search form of `app\models\ExtBillNo`.
 */
class ExtBillNoSearch extends ExtBillNo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bill', 'name_bill'], 'safe'],
            [['no_bill'], 'integer'],
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
        $query = ExtBillNo::find();

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
            'no_bill' => $this->no_bill,
        ]);

        $query->andFilterWhere(['like', 'id_bill', $this->id_bill])
            ->andFilterWhere(['like', 'name_bill', $this->name_bill]);

        return $dataProvider;
    }
}
