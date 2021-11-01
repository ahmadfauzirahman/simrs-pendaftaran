<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NInvTransfer;

/**
 * NInvTransferSearch represents the model behind the search form of `app\models\NInvTransfer`.
 */
class NInvTransferSearch extends NInvTransfer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transfer_id', 'source_wh_id', 'destination_wh_id', 'approved', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['transfer_no', 'transfer_request_date', 'transfer_date', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = NInvTransfer::find();

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
            'transfer_id' => $this->transfer_id,
            'transfer_request_date' => $this->transfer_request_date,
            'transfer_date' => $this->transfer_date,
            'source_wh_id' => $this->source_wh_id,
            'destination_wh_id' => $this->destination_wh_id,
            'approved' => $this->approved,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'transfer_no', $this->transfer_no])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
