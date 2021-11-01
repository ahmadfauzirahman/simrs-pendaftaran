<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MorderMtl;

/**
 * MorderMtlSearch represents the model behind the search form of `app\models\MorderMtl`.
 */
class MorderMtlSearch extends MorderMtl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'seq', 'material_item_id'], 'integer'],
            [['qty_ordered', 'waste_pc', 'uom_conversion'], 'number'],
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
        $query = MorderMtl::find();

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
            'order_id' => $this->order_id,
            'seq' => $this->seq,
            'material_item_id' => $this->material_item_id,
            'qty_ordered' => $this->qty_ordered,
            'waste_pc' => $this->waste_pc,
            'uom_conversion' => $this->uom_conversion,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
