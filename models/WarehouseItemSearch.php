<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WarehouseItem;

/**
 * WarehouseItemSearch represents the model behind the search form of `app\models\WarehouseItem`.
 */
class WarehouseItemSearch extends WarehouseItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse_id', 'item_id', 'location_row', 'location_col'], 'integer'],
            [['minimum_qty', 'safety_level', 'economic_order_qty'], 'number'],
            [['location'], 'safe'],
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
        $query = WarehouseItem::find();

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
            'warehouse_id' => $this->warehouse_id,
            'item_id' => $this->item_id,
            'minimum_qty' => $this->minimum_qty,
            'safety_level' => $this->safety_level,
            'economic_order_qty' => $this->economic_order_qty,
            'location_row' => $this->location_row,
            'location_col' => $this->location_col,
        ]);

        $query->andFilterWhere(['like', 'location', $this->location]);

        return $dataProvider;
    }
}
