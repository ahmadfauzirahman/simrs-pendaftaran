<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NPurchaseSetup;

/**
 * NPurchaseSetupSearch represents the model behind the search form of `app\models\NPurchaseSetup`.
 */
class NPurchaseSetupSearch extends NPurchaseSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'qty_received_restriction', 'qty_ordered_auto_calc', 'default_show_order', 'default_show_receipt', 'prequest_rpt_cat_id', 'porder_rpt_cat_id', 'preceipt_rpt_cat_id', 'created_user_id', 'modified_user_id', 'preceipt_default_qty'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
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
        $query = NPurchaseSetup::find();

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
            'qty_received_restriction' => $this->qty_received_restriction,
            'qty_ordered_auto_calc' => $this->qty_ordered_auto_calc,
            'default_show_order' => $this->default_show_order,
            'default_show_receipt' => $this->default_show_receipt,
            'prequest_rpt_cat_id' => $this->prequest_rpt_cat_id,
            'porder_rpt_cat_id' => $this->porder_rpt_cat_id,
            'preceipt_rpt_cat_id' => $this->preceipt_rpt_cat_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'preceipt_default_qty' => $this->preceipt_default_qty,
        ]);

        return $dataProvider;
    }
}
