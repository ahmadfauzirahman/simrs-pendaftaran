<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QTrans;

/**
 * QTransSearch represents the model behind the search form of `app\models\QTrans`.
 */
class QTransSearch extends QTrans
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_trans_id', 'folio_id', 'q_server_id', 'status'], 'integer'],
            [['q_trans_date', 'q_number'], 'safe'],
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
        $query = QTrans::find();

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
            'q_trans_id' => $this->q_trans_id,
            'q_trans_date' => $this->q_trans_date,
            'folio_id' => $this->folio_id,
            'q_server_id' => $this->q_server_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'q_number', $this->q_number]);

        return $dataProvider;
    }
}
