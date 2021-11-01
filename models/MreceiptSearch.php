<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mreceipt;

/**
 * MreceiptSearch represents the model behind the search form of `app\models\Mreceipt`.
 */
class MreceiptSearch extends Mreceipt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'gl_year', 'gl_period', 'order_id', 'item_id', 'warehouse_id', 'posted', 'created_user_id', 'modified_user_id', 'printed'], 'integer'],
            [['receipt_no', 'receipt_date', 'order_no', 'created_time', 'modified_time', 'uom'], 'safe'],
            [['qty_received'], 'number'],
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
        $query = Mreceipt::find();

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
            'receipt_id' => $this->receipt_id,
            'gl_year' => $this->gl_year,
            'gl_period' => $this->gl_period,
            'receipt_date' => $this->receipt_date,
            'order_id' => $this->order_id,
            'item_id' => $this->item_id,
            'warehouse_id' => $this->warehouse_id,
            'qty_received' => $this->qty_received,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'printed' => $this->printed,
        ]);

        $query->andFilterWhere(['like', 'receipt_no', $this->receipt_no])
            ->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
