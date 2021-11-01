<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\McuExt;

/**
 * McuExtSearch represents the model behind the search form of `app\models\McuExt`.
 */
class McuExtSearch extends McuExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mcu_id', 'customer_id', 'dokter_id', 'amount', 'lokasi_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['mcu_no', 'mcu_date', 'item_mcu', 'notes', 'created_time', 'modified_time'], 'safe'],
            [['amount_mcu'], 'number'],
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
        $query = McuExt::find();

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
            'mcu_id' => $this->mcu_id,
            'mcu_date' => $this->mcu_date,
            'customer_id' => $this->customer_id,
            'dokter_id' => $this->dokter_id,
            'amount' => $this->amount,
            'amount_mcu' => $this->amount_mcu,
            'lokasi_id' => $this->lokasi_id,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'mcu_no', $this->mcu_no])
            ->andFilterWhere(['like', 'item_mcu', $this->item_mcu])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
