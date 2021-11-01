<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemDist;

/**
 * ItemDistSearch represents the model behind the search form of `app\models\ItemDist`.
 */
class ItemDistSearch extends ItemDist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq', 'staff_id', 'account_id'], 'integer'],
            [['description'], 'safe'],
            [['dist_pc', 'dist_num', 'dist_denum'], 'number'],
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
        $query = ItemDist::find();

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
            'staff_id' => $this->staff_id,
            'account_id' => $this->account_id,
            'dist_pc' => $this->dist_pc,
            'dist_num' => $this->dist_num,
            'dist_denum' => $this->dist_denum,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
