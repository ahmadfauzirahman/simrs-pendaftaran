<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ServiceExt;

/**
 * ServiceExtSearch represents the model behind the search form of `app\models\ServiceExt`.
 */
class ServiceExtSearch extends ServiceExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_id', 'asset_id', 'vendor_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['service_no', 'service_date', 'staff', 'notes', 'km1', 'km2', 'km3', 'created_time', 'modified_time'], 'safe'],
            [['items_net_amount', 'disc_pc', 'disc_amount', 'amount'], 'number'],
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
        $query = ServiceExt::find();

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
            'service_id' => $this->service_id,
            'asset_id' => $this->asset_id,
            'vendor_id' => $this->vendor_id,
            'items_net_amount' => $this->items_net_amount,
            'disc_pc' => $this->disc_pc,
            'disc_amount' => $this->disc_amount,
            'amount' => $this->amount,
            'service_date' => $this->service_date,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'service_no', $this->service_no])
            ->andFilterWhere(['like', 'staff', $this->staff])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'km1', $this->km1])
            ->andFilterWhere(['like', 'km2', $this->km2])
            ->andFilterWhere(['like', 'km3', $this->km3]);

        return $dataProvider;
    }
}
