<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportAccess;

/**
 * ReportAccessSearch represents the model behind the search form of `app\models\ReportAccess`.
 */
class ReportAccessSearch extends ReportAccess
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'seq', 'user_id', 'group_id', 'can_view', 'can_modify', 'can_delete'], 'integer'],
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
        $query = ReportAccess::find();

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
            'seq' => $this->seq,
            'user_id' => $this->user_id,
            'group_id' => $this->group_id,
            'can_view' => $this->can_view,
            'can_modify' => $this->can_modify,
            'can_delete' => $this->can_delete,
        ]);

        return $dataProvider;
    }
}
