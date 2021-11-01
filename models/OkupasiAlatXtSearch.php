<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiAlatXt;

/**
 * OkupasiAlatXtSearch represents the model behind the search form of `app\models\OkupasiAlatXt`.
 */
class OkupasiAlatXtSearch extends OkupasiAlatXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq'], 'integer'],
            [['alat'], 'safe'],
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
        $query = OkupasiAlatXt::find();

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
            'okup_id' => $this->okup_id,
            'seq' => $this->seq,
        ]);

        $query->andFilterWhere(['like', 'alat', $this->alat]);

        return $dataProvider;
    }
}
