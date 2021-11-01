<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NurseCareParamsTitle;

/**
 * NurseCareParamsTitleSearch represents the model behind the search form of `app\models\NurseCareParamsTitle`.
 */
class NurseCareParamsTitleSearch extends NurseCareParamsTitle
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nurse_care_param_id'], 'integer'],
            [['report_title', 'report_title_en'], 'safe'],
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
        $query = NurseCareParamsTitle::find();

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
        ]);

        $query->andFilterWhere(['like', 'report_title', $this->report_title])
            ->andFilterWhere(['like', 'report_title_en', $this->report_title_en]);

        return $dataProvider;
    }
}
