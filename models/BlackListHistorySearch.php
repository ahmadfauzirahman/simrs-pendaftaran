<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\blackListHistory;

/**
 * BlackListHistorySearch represents the model behind the search form of `app\models\blackListHistory`.
 */
class BlackListHistorySearch extends blackListHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['black_list_id', 'patient_id', 'user_id'], 'integer'],
            [['reason', 'changed_at'], 'safe'],
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
        $query = blackListHistory::find();

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
            'black_list_id' => $this->black_list_id,
            'patient_id' => $this->patient_id,
            'user_id' => $this->user_id,
            'changed_at' => $this->changed_at,
        ]);

        $query->andFilterWhere(['like', 'reason', $this->reason]);

        return $dataProvider;
    }
}
