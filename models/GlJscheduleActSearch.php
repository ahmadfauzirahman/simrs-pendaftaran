<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJscheduleAct;

/**
 * GlJscheduleActSearch represents the model behind the search form of `app\models\GlJscheduleAct`.
 */
class GlJscheduleActSearch extends GlJscheduleAct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jschedule_id', 'seq', 'act_user_id'], 'integer'],
            [['act_date', 'description'], 'safe'],
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
        $query = GlJscheduleAct::find();

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
            'jschedule_id' => $this->jschedule_id,
            'seq' => $this->seq,
            'act_date' => $this->act_date,
            'act_user_id' => $this->act_user_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
