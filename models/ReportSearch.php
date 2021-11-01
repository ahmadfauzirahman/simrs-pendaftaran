<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Report;

/**
 * ReportSearch represents the model behind the search form of `app\models\Report`.
 */
class ReportSearch extends Report
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'report_group_id', 'report_type', 'is_group', 'category_id', 'main_query_id', 'owner', 'created_user_id', 'modified_user_id', 'url_before_print_show', 'url_before_print_x', 'url_before_print_y', 'url_after_print_show', 'url_after_print_x', 'url_after_print_y'], 'integer'],
            [['report_name', 'description', 'report_data', 'keyword', 'created_time', 'modified_time', 'sample_picture', 'sql_after_print', 'url_before_print', 'url_after_print', 'email_subject', 'email_body', 'last_execute'], 'safe'],
            [['email_every'], 'number'],
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
        $query = Report::find();

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
            'report_id' => $this->report_id,
            'report_group_id' => $this->report_group_id,
            'report_type' => $this->report_type,
            'is_group' => $this->is_group,
            'category_id' => $this->category_id,
            'main_query_id' => $this->main_query_id,
            'owner' => $this->owner,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'url_before_print_show' => $this->url_before_print_show,
            'url_before_print_x' => $this->url_before_print_x,
            'url_before_print_y' => $this->url_before_print_y,
            'url_after_print_show' => $this->url_after_print_show,
            'url_after_print_x' => $this->url_after_print_x,
            'url_after_print_y' => $this->url_after_print_y,
            'email_every' => $this->email_every,
            'last_execute' => $this->last_execute,
        ]);

        $query->andFilterWhere(['like', 'report_name', $this->report_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'report_data', $this->report_data])
            ->andFilterWhere(['like', 'keyword', $this->keyword])
            ->andFilterWhere(['like', 'sample_picture', $this->sample_picture])
            ->andFilterWhere(['like', 'sql_after_print', $this->sql_after_print])
            ->andFilterWhere(['like', 'url_before_print', $this->url_before_print])
            ->andFilterWhere(['like', 'url_after_print', $this->url_after_print])
            ->andFilterWhere(['like', 'email_subject', $this->email_subject])
            ->andFilterWhere(['like', 'email_body', $this->email_body]);

        return $dataProvider;
    }
}
