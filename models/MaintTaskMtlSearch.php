<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\maintTaskMtl;

/**
 * MaintTaskMtlSearch represents the model behind the search form of `app\models\maintTaskMtl`.
 */
class MaintTaskMtlSearch extends maintTaskMtl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'seq', 'item_id'], 'integer'],
            [['quantity', 'waste', 'uom_conversion'], 'number'],
            [['uom'], 'safe'],
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
        $query = maintTaskMtl::find();

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
            'task_id' => $this->task_id,
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'waste' => $this->waste,
            'uom_conversion' => $this->uom_conversion,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
