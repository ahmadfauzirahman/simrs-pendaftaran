<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResponeTimePoliXt;

/**
 * ResponeTimePoliXtSearch represents the model behind the search form of `app\models\ResponeTimePoliXt`.
 */
class ResponeTimePoliXtSearch extends ResponeTimePoliXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['respone_id', 'reg_id', 'folio_id', 'user_start', 'user_end'], 'integer'],
            [['start_date', 'start_time', 'end_date', 'end_time'], 'safe'],
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
        $query = ResponeTimePoliXt::find();

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
            'respone_id' => $this->respone_id,
            'reg_id' => $this->reg_id,
            'folio_id' => $this->folio_id,
            'start_date' => $this->start_date,
            'start_time' => $this->start_time,
            'end_date' => $this->end_date,
            'end_time' => $this->end_time,
            'user_start' => $this->user_start,
            'user_end' => $this->user_end,
        ]);

        return $dataProvider;
    }
}
