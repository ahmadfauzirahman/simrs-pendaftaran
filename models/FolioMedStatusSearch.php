<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioMedStatus;

/**
 * FolioMedStatusSearch represents the model behind the search form of `app\models\FolioMedStatus`.
 */
class FolioMedStatusSearch extends FolioMedStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_id', 'user_id', 'folio_id', 'med_status_id'], 'integer'],
            [['module', 'user_name', 'med_status_date'], 'safe'],
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
        $query = FolioMedStatus::find();

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
            'user_id' => $this->user_id,
            'folio_id' => $this->folio_id,
            'med_status_id' => $this->med_status_id,
            'med_status_date' => $this->med_status_date,
        ]);

        $query->andFilterWhere(['like', 'module', $this->module])
            ->andFilterWhere(['like', 'user_name', $this->user_name]);

        return $dataProvider;
    }
}
