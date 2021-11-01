<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScrtMod;

/**
 * ScrtModSearch represents the model behind the search form of `app\models\ScrtMod`.
 */
class ScrtModSearch extends ScrtMod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mod_id', 'parent_mod_id', 'order_seq', 'bi_x', 'bi_y', 'ai_x', 'ai_y', 'be_x', 'be_y', 'ae_x', 'ae_y', 'bs_x', 'bs_y', 'as_x', 'as_y', 'bc_x', 'bc_y', 'ac_x', 'ac_y', 'bd_x', 'bd_y', 'ad_x', 'ad_y', 'bo_x', 'bo_y', 'ao_x', 'ao_y', 'bp_x', 'bp_y', 'ap_x', 'ap_y', 'bx_x', 'bx_y', 'ax_x', 'ax_y', 'bt_x', 'bt_y', 'at_x', 'at_y', 'br_x', 'br_y', 'ar_x', 'ar_y', 'oc_x', 'oc_y'], 'integer'],
            [['mod_name', 'standard_actions', 'add_actions', 'action_name', 'form_name', 'notes', 'before_insert_url', 'after_insert_url', 'before_edit_url', 'after_edit_url', 'before_save_url', 'after_save_url', 'before_cancel_url', 'after_cancel_url', 'before_delete_url', 'after_delete_url', 'before_copy_url', 'after_copy_url', 'before_post_url', 'after_post_url', 'before_export_url', 'after_export_url', 'before_print_url', 'after_print_url', 'before_refresh_url', 'after_refresh_url', 'on_call_url'], 'safe'],
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
        $query = ScrtMod::find();

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
            'mod_id' => $this->mod_id,
            'parent_mod_id' => $this->parent_mod_id,
            'order_seq' => $this->order_seq,
            'bi_x' => $this->bi_x,
            'bi_y' => $this->bi_y,
            'ai_x' => $this->ai_x,
            'ai_y' => $this->ai_y,
            'be_x' => $this->be_x,
            'be_y' => $this->be_y,
            'ae_x' => $this->ae_x,
            'ae_y' => $this->ae_y,
            'bs_x' => $this->bs_x,
            'bs_y' => $this->bs_y,
            'as_x' => $this->as_x,
            'as_y' => $this->as_y,
            'bc_x' => $this->bc_x,
            'bc_y' => $this->bc_y,
            'ac_x' => $this->ac_x,
            'ac_y' => $this->ac_y,
            'bd_x' => $this->bd_x,
            'bd_y' => $this->bd_y,
            'ad_x' => $this->ad_x,
            'ad_y' => $this->ad_y,
            'bo_x' => $this->bo_x,
            'bo_y' => $this->bo_y,
            'ao_x' => $this->ao_x,
            'ao_y' => $this->ao_y,
            'bp_x' => $this->bp_x,
            'bp_y' => $this->bp_y,
            'ap_x' => $this->ap_x,
            'ap_y' => $this->ap_y,
            'bx_x' => $this->bx_x,
            'bx_y' => $this->bx_y,
            'ax_x' => $this->ax_x,
            'ax_y' => $this->ax_y,
            'bt_x' => $this->bt_x,
            'bt_y' => $this->bt_y,
            'at_x' => $this->at_x,
            'at_y' => $this->at_y,
            'br_x' => $this->br_x,
            'br_y' => $this->br_y,
            'ar_x' => $this->ar_x,
            'ar_y' => $this->ar_y,
            'oc_x' => $this->oc_x,
            'oc_y' => $this->oc_y,
        ]);

        $query->andFilterWhere(['like', 'mod_name', $this->mod_name])
            ->andFilterWhere(['like', 'standard_actions', $this->standard_actions])
            ->andFilterWhere(['like', 'add_actions', $this->add_actions])
            ->andFilterWhere(['like', 'action_name', $this->action_name])
            ->andFilterWhere(['like', 'form_name', $this->form_name])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'before_insert_url', $this->before_insert_url])
            ->andFilterWhere(['like', 'after_insert_url', $this->after_insert_url])
            ->andFilterWhere(['like', 'before_edit_url', $this->before_edit_url])
            ->andFilterWhere(['like', 'after_edit_url', $this->after_edit_url])
            ->andFilterWhere(['like', 'before_save_url', $this->before_save_url])
            ->andFilterWhere(['like', 'after_save_url', $this->after_save_url])
            ->andFilterWhere(['like', 'before_cancel_url', $this->before_cancel_url])
            ->andFilterWhere(['like', 'after_cancel_url', $this->after_cancel_url])
            ->andFilterWhere(['like', 'before_delete_url', $this->before_delete_url])
            ->andFilterWhere(['like', 'after_delete_url', $this->after_delete_url])
            ->andFilterWhere(['like', 'before_copy_url', $this->before_copy_url])
            ->andFilterWhere(['like', 'after_copy_url', $this->after_copy_url])
            ->andFilterWhere(['like', 'before_post_url', $this->before_post_url])
            ->andFilterWhere(['like', 'after_post_url', $this->after_post_url])
            ->andFilterWhere(['like', 'before_export_url', $this->before_export_url])
            ->andFilterWhere(['like', 'after_export_url', $this->after_export_url])
            ->andFilterWhere(['like', 'before_print_url', $this->before_print_url])
            ->andFilterWhere(['like', 'after_print_url', $this->after_print_url])
            ->andFilterWhere(['like', 'before_refresh_url', $this->before_refresh_url])
            ->andFilterWhere(['like', 'after_refresh_url', $this->after_refresh_url])
            ->andFilterWhere(['like', 'on_call_url', $this->on_call_url]);

        return $dataProvider;
    }
}
