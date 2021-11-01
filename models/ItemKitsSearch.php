<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemKits;

/**
 * ItemKitsSearch represents the model behind the search form of `app\models\ItemKits`.
 */
class ItemKitsSearch extends ItemKits
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq', 'kits_item_id'], 'integer'],
            [['quantity', 'waste_pc', 'unit_price', 'disc_pc'], 'number'],
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
        $query = ItemKits::find();

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
            'kits_item_id' => $this->kits_item_id,
            'quantity' => $this->quantity,
            'waste_pc' => $this->waste_pc,
            'unit_price' => $this->unit_price,
            'disc_pc' => $this->disc_pc,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
