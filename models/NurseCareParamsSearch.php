<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NurseCareParams;

/**
 * NurseCareParamsSearch represents the model behind the search form of `app\models\NurseCareParams`.
 */
class NurseCareParamsSearch extends NurseCareParams
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id', 'seq', 'dept_id', 'unit_id', 'sub_unit_id', 'reverse'], 'integer'],
            [['params', 'header', 'header_en', 'sub_header', 'sub_header_en', 'detail', 'detail_en'], 'safe'],
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
        $query = NurseCareParams::find();

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
            'nurse_care_param_id' => $this->nurse_care_param_id,
            'seq' => $this->seq,
            'dept_id' => $this->dept_id,
            'unit_id' => $this->unit_id,
            'sub_unit_id' => $this->sub_unit_id,
            'reverse' => $this->reverse,
        ]);

        $query->andFilterWhere(['like', 'params', $this->params])
            ->andFilterWhere(['like', 'header', $this->header])
            ->andFilterWhere(['like', 'header_en', $this->header_en])
            ->andFilterWhere(['like', 'sub_header', $this->sub_header])
            ->andFilterWhere(['like', 'sub_header_en', $this->sub_header_en])
            ->andFilterWhere(['like', 'detail', $this->detail])
            ->andFilterWhere(['like', 'detail_en', $this->detail_en]);

        return $dataProvider;
    }
}
