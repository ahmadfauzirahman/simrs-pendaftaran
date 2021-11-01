<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssetDepYear;

/**
 * AssetDepYearSearch represents the model behind the search form of `app\models\AssetDepYear`.
 */
class AssetDepYearSearch extends AssetDepYear
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id', 'year_no'], 'integer'],
            [['rate_year', 'dep_year', 'acc_dep_year', 'book_value'], 'number'],
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
        $query = AssetDepYear::find();

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
            'asset_id' => $this->asset_id,
            'year_no' => $this->year_no,
            'rate_year' => $this->rate_year,
            'dep_year' => $this->dep_year,
            'acc_dep_year' => $this->acc_dep_year,
            'book_value' => $this->book_value,
        ]);

        return $dataProvider;
    }
}
