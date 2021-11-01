<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NInvCount;

/**
 * NInvCountSearch represents the model behind the search form of `app\models\NInvCount`.
 */
class NInvCountSearch extends NInvCount
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count_id', 'warehouse_id', 'posted', 'adjust_in_acc_id', 'adjust_out_acc_id', 'created_user_id', 'modified_user_id', 'gl_period', 'gl_year'], 'integer'],
            [['count_no', 'count_date', 'description', 'counted_by', 'created_time', 'modified_time'], 'safe'],
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
        $query = NInvCount::find();

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
            'count_id' => $this->count_id,
            'count_date' => $this->count_date,
            'warehouse_id' => $this->warehouse_id,
            'posted' => $this->posted,
            'adjust_in_acc_id' => $this->adjust_in_acc_id,
            'adjust_out_acc_id' => $this->adjust_out_acc_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'gl_period' => $this->gl_period,
            'gl_year' => $this->gl_year,
        ]);

        $query->andFilterWhere(['like', 'count_no', $this->count_no])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'counted_by', $this->counted_by]);

        return $dataProvider;
    }
}
