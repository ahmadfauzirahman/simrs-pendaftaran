<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BankXt;

/**
 * BankXtSearch represents the model behind the search form of `app\models\BankXt`.
 */
class BankXtSearch extends BankXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bank_id'], 'integer'],
            [['bank_name'], 'safe'],
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
        $query = BankXt::find();

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
            'bank_id' => $this->bank_id,
        ]);

        $query->andFilterWhere(['like', 'bank_name', $this->bank_name]);

        return $dataProvider;
    }
}
