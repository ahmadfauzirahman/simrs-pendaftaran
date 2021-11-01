<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArSetup;

/**
 * ArSetupSearch represents the model behind the search form of `app\models\ArSetup`.
 */
class ArSetupSearch extends ArSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'invoice_warehouse_id', 'return_warehouse_id', 'credit_limit_authority', 'ar_inv_gl_jtype_id', 'ar_pmt_gl_jtype_id', 'ar_inv_reg_gl_type_id', 'default_show_invoice', 'default_show_payment', 'ar_inv_rpt_cat_id', 'ar_inv_bind_rpt_cat_id', 'ar_pmt_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
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
        $query = ArSetup::find();

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
            'invoice_warehouse_id' => $this->invoice_warehouse_id,
            'return_warehouse_id' => $this->return_warehouse_id,
            'credit_limit_authority' => $this->credit_limit_authority,
            'ar_inv_gl_jtype_id' => $this->ar_inv_gl_jtype_id,
            'ar_pmt_gl_jtype_id' => $this->ar_pmt_gl_jtype_id,
            'ar_inv_reg_gl_type_id' => $this->ar_inv_reg_gl_type_id,
            'default_show_invoice' => $this->default_show_invoice,
            'default_show_payment' => $this->default_show_payment,
            'ar_inv_rpt_cat_id' => $this->ar_inv_rpt_cat_id,
            'ar_inv_bind_rpt_cat_id' => $this->ar_inv_bind_rpt_cat_id,
            'ar_pmt_rpt_cat_id' => $this->ar_pmt_rpt_cat_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        return $dataProvider;
    }
}
