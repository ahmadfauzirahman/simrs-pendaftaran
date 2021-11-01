<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedrecRequestAct;

/**
 * MedrecRequestActSearch represents the model behind the search form of `app\models\MedrecRequestAct`.
 */
class MedrecRequestActSearch extends MedrecRequestAct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_act_id', 'mr_request_id', 'user_id'], 'integer'],
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
        $query = MedrecRequestAct::find();

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
            'mr_act_id' => $this->mr_act_id,
            'mr_request_id' => $this->mr_request_id,
            'user_id' => $this->user_id,
            'act_date' => $this->act_date,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
