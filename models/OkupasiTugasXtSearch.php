<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiTugasXt;

/**
 * OkupasiTugasXtSearch represents the model behind the search form of `app\models\OkupasiTugasXt`.
 */
class OkupasiTugasXtSearch extends OkupasiTugasXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq', 'created_user_id'], 'integer'],
            [['tugas', 'target', 'cara', 'created_time'], 'safe'],
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
        $query = OkupasiTugasXt::find();

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
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'tugas', $this->tugas])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'cara', $this->cara]);

        return $dataProvider;
    }
}
