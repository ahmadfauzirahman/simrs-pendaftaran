<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NprequestDet;

/**
 * NPrequestDetSearch represents the model behind the search form of `app\models\NprequestDet`.
 */
class NPrequestDetSearch extends NprequestDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['request_id', 'seq', 'item_id'], 'integer'],
            [['qty_requested', 'qty_ordered', 'uom_conversion'], 'number'],
            [['uom', 'remark'], 'safe'],
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
        $query = NprequestDet::find();

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
            'request_id' => $this->request_id,
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'qty_requested' => $this->qty_requested,
            'qty_ordered' => $this->qty_ordered,
            'uom_conversion' => $this->uom_conversion,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
