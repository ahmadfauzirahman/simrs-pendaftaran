<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NurseCareValues;

/**
 * NurseCareValuesSearch represents the model behind the search form of `app\models\NurseCareValues`.
 */
class NurseCareValuesSearch extends NurseCareValues
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id', 'seq', 'value_seq', 'show_detail'], 'integer'],
            [['value', 'value_en'], 'safe'],
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
        $query = NurseCareValues::find();

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
            'value_seq' => $this->value_seq,
            'show_detail' => $this->show_detail,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value])
            ->andFilterWhere(['like', 'value_en', $this->value_en]);

        return $dataProvider;
    }
}
