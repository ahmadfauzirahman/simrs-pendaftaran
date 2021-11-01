<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BillingSetup;

/**
 * BillingSetupSearch represents the model behind the search form of `app\models\BillingSetup`.
 */
class BillingSetupSearch extends BillingSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'claim_mgmt_default_show_reg', 'bill_summary_rpt_cat_id', 'billing_pmt_rpt_cat_id'], 'integer'],
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
        $query = BillingSetup::find();

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
            'claim_mgmt_default_show_reg' => $this->claim_mgmt_default_show_reg,
            'bill_summary_rpt_cat_id' => $this->bill_summary_rpt_cat_id,
            'billing_pmt_rpt_cat_id' => $this->billing_pmt_rpt_cat_id,
        ]);

        return $dataProvider;
    }
}
