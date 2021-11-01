<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NurseCareVsign;

/**
 * NurseCareVsignSearch represents the model behind the search form of `app\models\NurseCareVsign`.
 */
class NurseCareVsignSearch extends NurseCareVsign
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'user_id', 'deleted', 'status', 'nurse_care_param_id'], 'integer'],
            [['entry_date', 'param_name', 'param_value', 'notes'], 'safe'],
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
        $query = NurseCareVsign::find();

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
            'folio_id' => $this->folio_id,
            'seq' => $this->seq,
            'entry_date' => $this->entry_date,
            'user_id' => $this->user_id,
            'deleted' => $this->deleted,
            'status' => $this->status,
            'nurse_care_param_id' => $this->nurse_care_param_id,
        ]);

        $query->andFilterWhere(['like', 'param_name', $this->param_name])
            ->andFilterWhere(['like', 'param_value', $this->param_value])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
