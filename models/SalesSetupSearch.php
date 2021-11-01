<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SalesSetup;

/**
 * SalesSetupSearch represents the model behind the search form of `app\models\SalesSetup`.
 */
class SalesSetupSearch extends SalesSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'shipment_warehouse_id', 'shipment_carrier_id', 'qty_ordered_restriction', 'qty_shipped_restriction', 'default_show_order', 'default_show_shipment', 'sorder_rpt_cat_id', 'shipment_rpt_cat_id', 'correction_needs_supervisor', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time', 'pos_usage', 'pos_usage_remark', 'dtd', 'non_dtd'], 'safe'],
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
        $query = SalesSetup::find();

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
            'company_id' => $this->company_id,
            'shipment_warehouse_id' => $this->shipment_warehouse_id,
            'shipment_carrier_id' => $this->shipment_carrier_id,
            'qty_ordered_restriction' => $this->qty_ordered_restriction,
            'qty_shipped_restriction' => $this->qty_shipped_restriction,
            'default_show_order' => $this->default_show_order,
            'default_show_shipment' => $this->default_show_shipment,
            'sorder_rpt_cat_id' => $this->sorder_rpt_cat_id,
            'shipment_rpt_cat_id' => $this->shipment_rpt_cat_id,
            'correction_needs_supervisor' => $this->correction_needs_supervisor,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'pos_usage', $this->pos_usage])
            ->andFilterWhere(['like', 'pos_usage_remark', $this->pos_usage_remark])
            ->andFilterWhere(['like', 'dtd', $this->dtd])
            ->andFilterWhere(['like', 'non_dtd', $this->non_dtd]);

        return $dataProvider;
    }
}
