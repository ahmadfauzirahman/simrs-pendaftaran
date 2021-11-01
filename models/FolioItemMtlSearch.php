<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioItemMtl;

/**
 * FolioItemMtlSearch represents the model behind the search form of `app\models\FolioItemMtl`.
 */
class FolioItemMtlSearch extends FolioItemMtl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'material_seq', 'material_item_id', 'uom_id', 'staff_id'], 'integer'],
            [['quantity', 'waste_pc', 'uom_conversion', 'unit_price', 'unit_discount'], 'number'],
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
        $query = FolioItemMtl::find();

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
            'folio_id' => $this->folio_id,
            'seq' => $this->seq,
            'material_seq' => $this->material_seq,
            'material_item_id' => $this->material_item_id,
            'quantity' => $this->quantity,
            'waste_pc' => $this->waste_pc,
            'uom_conversion' => $this->uom_conversion,
            'uom_id' => $this->uom_id,
            'unit_price' => $this->unit_price,
            'unit_discount' => $this->unit_discount,
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
