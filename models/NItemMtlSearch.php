<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NItemMtl;

/**
 * NItemMtlSearch represents the model behind the search form of `app\models\NItemMtl`.
 */
class NItemMtlSearch extends NItemMtl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq', 'material_item_id', 'staff_id'], 'integer'],
            [['quantity', 'waste_pc'], 'number'],
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
        $query = NItemMtl::find();

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
            'item_id' => $this->item_id,
            'seq' => $this->seq,
            'material_item_id' => $this->material_item_id,
            'quantity' => $this->quantity,
            'waste_pc' => $this->waste_pc,
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
