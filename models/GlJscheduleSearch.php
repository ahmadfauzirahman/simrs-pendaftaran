<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJschedule;

/**
 * GlJscheduleSearch represents the model behind the search form of `app\models\GlJschedule`.
 */
class GlJscheduleSearch extends GlJschedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jschedule_id', 'journal_type_id', 'posted', 'auto_post', 'created_user_id', 'modified_user_id'], 'integer'],
            [['schedule_name', 'from_date', 'to_date', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = GlJschedule::find();

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
            'journal_type_id' => $this->journal_type_id,
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
            'posted' => $this->posted,
            'auto_post' => $this->auto_post,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'schedule_name', $this->schedule_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
