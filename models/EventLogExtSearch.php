<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EventLogExt;

/**
 * EventLogExtSearch represents the model behind the search form of `app\models\EventLogExt`.
 */
class EventLogExtSearch extends EventLogExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_log_id', 'user_id'], 'integer'],
            [['event_time', 'description', 'form_name'], 'safe'],
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
        $query = EventLogExt::find();

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
            'event_log_id' => $this->event_log_id,
            'user_id' => $this->user_id,
            'event_time' => $this->event_time,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'form_name', $this->form_name]);

        return $dataProvider;
    }
}
