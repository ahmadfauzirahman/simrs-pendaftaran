<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportDataDom;

/**
 * ReportDataDomSearch represents the model behind the search form of `app\models\ReportDataDom`.
 */
class ReportDataDomSearch extends ReportDataDom
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'seq', 'data_id'], 'integer'],
            [['domain_name', 'table_name'], 'safe'],
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
        $query = ReportDataDom::find();

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
            'report_id' => $this->report_id,
            'seq' => $this->seq,
            'data_id' => $this->data_id,
        ]);

        $query->andFilterWhere(['like', 'domain_name', $this->domain_name])
            ->andFilterWhere(['like', 'table_name', $this->table_name]);

        return $dataProvider;
    }
}
