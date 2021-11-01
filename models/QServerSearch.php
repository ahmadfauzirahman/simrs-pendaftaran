<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\QServer;

/**
 * QServerSearch represents the model behind the search form of `app\models\QServer`.
 */
class QServerSearch extends QServer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_server_id', 'q_server_no', 'q_server_color', 'created_user_id', 'modified_user_id', 'status', 'registration_id', 'patient_id', 'disabled'], 'integer'],
            [['q_server_name', 'q_server_display_name', 'q_server_display_short', 'created_time', 'modified_time', 'user_name', 'last_update', 'ip_address', 'computer_name', 'queue_no'], 'safe'],
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
        $query = QServer::find();

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
            'q_server_id' => $this->q_server_id,
            'q_server_no' => $this->q_server_no,
            'q_server_color' => $this->q_server_color,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'last_update' => $this->last_update,
            'status' => $this->status,
            'registration_id' => $this->registration_id,
            'patient_id' => $this->patient_id,
            'disabled' => $this->disabled,
        ]);

        $query->andFilterWhere(['like', 'q_server_name', $this->q_server_name])
            ->andFilterWhere(['like', 'q_server_display_name', $this->q_server_display_name])
            ->andFilterWhere(['like', 'q_server_display_short', $this->q_server_display_short])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'computer_name', $this->computer_name])
            ->andFilterWhere(['like', 'queue_no', $this->queue_no]);

        return $dataProvider;
    }
}
