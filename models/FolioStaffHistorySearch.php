<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioStaffHistory;

/**
 * FolioStaffHistorySearch represents the model behind the search form of `app\models\FolioStaffHistory`.
 */
class FolioStaffHistorySearch extends FolioStaffHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_id', 'folio_id', 'staff_id', 'change_type'], 'integer'],
            [['staff_change_time'], 'safe'],
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
        $query = FolioStaffHistory::find();

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
            'history_id' => $this->history_id,
            'folio_id' => $this->folio_id,
            'staff_id' => $this->staff_id,
            'staff_change_time' => $this->staff_change_time,
            'change_type' => $this->change_type,
        ]);

        return $dataProvider;
    }
}
