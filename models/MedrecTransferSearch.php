<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedrecTransfer;

/**
 * MedrecTransferSearch represents the model behind the search form of `app\models\MedrecTransfer`.
 */
class MedrecTransferSearch extends MedrecTransfer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_transfer_id', 'from_location_id', 'to_location_id', 'sent_user_id', 'received_user_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['mr_transfer_no', 'mr_transfer_date', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = MedrecTransfer::find();

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
            'mr_transfer_id' => $this->mr_transfer_id,
            'mr_transfer_date' => $this->mr_transfer_date,
            'from_location_id' => $this->from_location_id,
            'to_location_id' => $this->to_location_id,
            'sent_user_id' => $this->sent_user_id,
            'received_user_id' => $this->received_user_id,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'mr_transfer_no', $this->mr_transfer_no])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
