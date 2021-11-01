<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScrtPolicy;

/**
 * ScrtPolicySearch represents the model behind the search form of `app\models\ScrtPolicy`.
 */
class ScrtPolicySearch extends ScrtPolicy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'login_option', 'full_access_module', 'allow_access_self_amount', 'allow_access_pay_by_amount', 'oe_allow_change_price', 'oe_allow_change_disc', 'oe_show_price_column', 'oe_show_disc_column', 'oe_show_tax_column', 'oe_show_total_amount_column', 'oe_show_self_amount_column', 'oe_show_pay_by_amount_column', 'oe_allow_change_self_amount', 'oe_allow_change_payby_amount', 'oe_allow_change_med_status', 'oe_allow_change_uom', 'exam_tab', 'built_in', 'custom_form_id', 'oe_allow_folio_correction', 'oe_allow_change_pay_by', 'oe_allow_change_reg_status', 'created_user_id', 'modified_user_id'], 'integer'],
            [['policy_name', 'notes', 'reg_menu_cap', 'order_menu_cap', 'billing_menu_cap', 'pos_menu_cap', 'created_time', 'modified_time'], 'safe'],
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
        $query = ScrtPolicy::find();

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
            'policy_id' => $this->policy_id,
            'login_option' => $this->login_option,
            'full_access_module' => $this->full_access_module,
            'allow_access_self_amount' => $this->allow_access_self_amount,
            'allow_access_pay_by_amount' => $this->allow_access_pay_by_amount,
            'oe_allow_change_price' => $this->oe_allow_change_price,
            'oe_allow_change_disc' => $this->oe_allow_change_disc,
            'oe_show_price_column' => $this->oe_show_price_column,
            'oe_show_disc_column' => $this->oe_show_disc_column,
            'oe_show_tax_column' => $this->oe_show_tax_column,
            'oe_show_total_amount_column' => $this->oe_show_total_amount_column,
            'oe_show_self_amount_column' => $this->oe_show_self_amount_column,
            'oe_show_pay_by_amount_column' => $this->oe_show_pay_by_amount_column,
            'oe_allow_change_self_amount' => $this->oe_allow_change_self_amount,
            'oe_allow_change_payby_amount' => $this->oe_allow_change_payby_amount,
            'oe_allow_change_med_status' => $this->oe_allow_change_med_status,
            'oe_allow_change_uom' => $this->oe_allow_change_uom,
            'exam_tab' => $this->exam_tab,
            'built_in' => $this->built_in,
            'custom_form_id' => $this->custom_form_id,
            'oe_allow_folio_correction' => $this->oe_allow_folio_correction,
            'oe_allow_change_pay_by' => $this->oe_allow_change_pay_by,
            'oe_allow_change_reg_status' => $this->oe_allow_change_reg_status,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'policy_name', $this->policy_name])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'reg_menu_cap', $this->reg_menu_cap])
            ->andFilterWhere(['like', 'order_menu_cap', $this->order_menu_cap])
            ->andFilterWhere(['like', 'billing_menu_cap', $this->billing_menu_cap])
            ->andFilterWhere(['like', 'pos_menu_cap', $this->pos_menu_cap]);

        return $dataProvider;
    }
}
