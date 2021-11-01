<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\HkSubUnit;

/**
 * HkSubUnitSearch represents the model behind the search form of `app\models\HkSubUnit`.
 */
class HkSubUnitSearch extends HkSubUnit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sub_unit_id', 'begin_status', 'end_status', 'user_id'], 'integer'],
            [['hk_date', 'notes'], 'safe'],
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
        $query = HkSubUnit::find();

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
            'id' => $this->id,
            'sub_unit_id' => $this->sub_unit_id,
            'hk_date' => $this->hk_date,
            'begin_status' => $this->begin_status,
            'end_status' => $this->end_status,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
