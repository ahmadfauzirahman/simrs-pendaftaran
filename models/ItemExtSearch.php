<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemExt;

/**
 * ItemExtSearch represents the model behind the search form of `app\models\ItemExt`.
 */
class ItemExtSearch extends ItemExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'item_header', 'created_user_id', 'modified_user_id'], 'integer'],
            [['item_no', 'item_name', 'description', 'created_time', 'modified_time'], 'safe'],
            [['unit_price'], 'number'],
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
        $query = ItemExt::find();

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
            'item_header' => $this->item_header,
            'unit_price' => $this->unit_price,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'item_no', $this->item_no])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
