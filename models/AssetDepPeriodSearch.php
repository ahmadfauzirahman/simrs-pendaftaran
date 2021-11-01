<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssetDepPeriod;

/**
 * AssetDepPeriodSearch represents the model behind the search form of `app\models\AssetDepPeriod`.
 */
class AssetDepPeriodSearch extends AssetDepPeriod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id', 'seq', 'gl_period', 'gl_year', 'posted'], 'integer'],
            [['trans_date'], 'safe'],
            [['amount', 'book_value'], 'number'],
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
        $query = AssetDepPeriod::find();

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
            'seq' => $this->seq,
            'gl_period' => $this->gl_period,
            'gl_year' => $this->gl_year,
            'trans_date' => $this->trans_date,
            'amount' => $this->amount,
            'book_value' => $this->book_value,
            'posted' => $this->posted,
        ]);

        return $dataProvider;
    }
}
