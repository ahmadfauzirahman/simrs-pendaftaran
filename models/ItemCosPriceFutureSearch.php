<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemCosPriceFuture;

/**
 * ItemCosPriceFutureSearch represents the model behind the search form of `app\models\ItemCosPriceFuture`.
 */
class ItemCosPriceFutureSearch extends ItemCosPriceFuture
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['update_method', 'item_id', 'cos_id'], 'integer'],
            [['eff_date'], 'safe'],
            [['price', 'discount'], 'number'],
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
        $query = ItemCosPriceFuture::find();

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
            'update_method' => $this->update_method,
            'eff_date' => $this->eff_date,
            'item_id' => $this->item_id,
            'cos_id' => $this->cos_id,
            'price' => $this->price,
            'discount' => $this->discount,
        ]);

        return $dataProvider;
    }
}
