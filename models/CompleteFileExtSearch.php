<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CompleteFileExt;

/**
 * CompleteFileExtSearch represents the model behind the search form of `app\models\CompleteFileExt`.
 */
class CompleteFileExtSearch extends CompleteFileExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'staff_id', 'r_j', 'r_k', 'r_l', 'r_m', 'r_n', 'r_o', 'r_p', 'r_q', 'r_r', 'r_s', 'r_t', 'r_u', 'r_v', 'r_w', 'r_x', 'r_y', 'r_z', 'r_aa', 'r_ab', 'r_ac', 'r_ad', 'r_ae', 'r_af', 'r_ag', 'r_ah', 'r_ai', 'r_aj', 'r_am', 'o_i', 'o_j', 'o_k', 'o_l', 'o_m', 'o_n', 'o_o', 'o_p', 'o_q', 'o_r', 'o_s', 'o_t', 'o_u', 'o_v', 'o_w', 'o_x', 'o_y', 'o_z', 'o_aa', 'o_ac', 'o_ad', 'o_ae', 'o_af', 'a_i', 'a_j', 'a_k', 'a_l', 'a_m', 'a_n', 'a_o', 'a_p', 'a_q', 'a_r', 'a_s', 'a_t', 'a_u', 'a_v', 'a_w', 'a_x', 'a_y', 'a_z', 'a_aa', 'a_ab', 'a_ac', 'a_ad', 'a_ae', 'a_af', 'a_ag', 'a_ah', 'a_ai', 'a_aj', 'a_ak', 'a_al', 'a_am', 'a_an', 'a_ao', 'a_ap', 'a_aq', 'a_ar', 'i_i', 'i_j', 'i_k', 'i_l', 'i_m', 'i_n', 'i_o', 'i_p', 'i_q', 'i_r', 'i_s', 'i_t', 'i_u', 'i_v', 'i_w', 'i_x', 'i_y', 'i_z', 'i_aa', 'i_ab', 'i_ac', 'i_ad', 'i_ae', 'i_af', 'i_ag', 'i_ah', 'i_ai', 'i_aj', 'i_ak', 't_j', 't_k', 't_l', 't_m', 't_n', 't_o', 't_p', 't_q', 't_r', 't_s', 't_t', 't_u', 't_v', 't_w', 't_x', 't_y', 't_z', 't_aa', 't_ab', 't_ac', 't_ad', 't_ae', 't_af', 't_ag', 't_ah', 't_ai', 't_aj', 't_ak', 't_al', 'aa_j', 'aa_k', 'aa_l', 'aa_m', 'aa_n', 'aa_o', 'aa_p', 'aa_q', 'aa_r', 'aa_s', 'aa_t', 'aa_u', 'aa_v', 'aa_w', 'aa_x', 'aa_y', 'aa_z', 'aa_aa', 'aa_ab', 'aa_ac', 'aa_ad', 'aa_ae', 'aa_af', 'aa_ag', 'aa_ah', 'aa_ai', 'aa_aj', 'aa_ak', 'aa_al', 'aa_am', 'aa_an', 'aa_ao', 'aa_ap', 'aa_aq', 'aa_ar', 'r_cp', 'o_cp', 'a_cp', 'i_cp', 't_cp', 'aa_cp', 'created_user_id'], 'integer'],
            [['date_receive_file', 'date_start_ri', 'date_end_ri', 'r_ak', 'r_al', 'o_ab', 'r_date_cp', 'o_date_cp', 'a_date_cp', 'i_date_cp', 't_date_cp', 'aa_date_cp', 'created_time'], 'safe'],
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
        $query = CompleteFileExt::find();

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
            'reg_id' => $this->reg_id,
            'staff_id' => $this->staff_id,
            'date_receive_file' => $this->date_receive_file,
            'date_start_ri' => $this->date_start_ri,
            'date_end_ri' => $this->date_end_ri,
            'r_j' => $this->r_j,
            'r_k' => $this->r_k,
            'r_l' => $this->r_l,
            'r_m' => $this->r_m,
            'r_n' => $this->r_n,
            'r_o' => $this->r_o,
            'r_p' => $this->r_p,
            'r_q' => $this->r_q,
            'r_r' => $this->r_r,
            'r_s' => $this->r_s,
            'r_t' => $this->r_t,
            'r_u' => $this->r_u,
            'r_v' => $this->r_v,
            'r_w' => $this->r_w,
            'r_x' => $this->r_x,
            'r_y' => $this->r_y,
            'r_z' => $this->r_z,
            'r_aa' => $this->r_aa,
            'r_ab' => $this->r_ab,
            'r_ac' => $this->r_ac,
            'r_ad' => $this->r_ad,
            'r_ae' => $this->r_ae,
            'r_af' => $this->r_af,
            'r_ag' => $this->r_ag,
            'r_ah' => $this->r_ah,
            'r_ai' => $this->r_ai,
            'r_aj' => $this->r_aj,
            'r_am' => $this->r_am,
            'o_i' => $this->o_i,
            'o_j' => $this->o_j,
            'o_k' => $this->o_k,
            'o_l' => $this->o_l,
            'o_m' => $this->o_m,
            'o_n' => $this->o_n,
            'o_o' => $this->o_o,
            'o_p' => $this->o_p,
            'o_q' => $this->o_q,
            'o_r' => $this->o_r,
            'o_s' => $this->o_s,
            'o_t' => $this->o_t,
            'o_u' => $this->o_u,
            'o_v' => $this->o_v,
            'o_w' => $this->o_w,
            'o_x' => $this->o_x,
            'o_y' => $this->o_y,
            'o_z' => $this->o_z,
            'o_aa' => $this->o_aa,
            'o_ac' => $this->o_ac,
            'o_ad' => $this->o_ad,
            'o_ae' => $this->o_ae,
            'o_af' => $this->o_af,
            'a_i' => $this->a_i,
            'a_j' => $this->a_j,
            'a_k' => $this->a_k,
            'a_l' => $this->a_l,
            'a_m' => $this->a_m,
            'a_n' => $this->a_n,
            'a_o' => $this->a_o,
            'a_p' => $this->a_p,
            'a_q' => $this->a_q,
            'a_r' => $this->a_r,
            'a_s' => $this->a_s,
            'a_t' => $this->a_t,
            'a_u' => $this->a_u,
            'a_v' => $this->a_v,
            'a_w' => $this->a_w,
            'a_x' => $this->a_x,
            'a_y' => $this->a_y,
            'a_z' => $this->a_z,
            'a_aa' => $this->a_aa,
            'a_ab' => $this->a_ab,
            'a_ac' => $this->a_ac,
            'a_ad' => $this->a_ad,
            'a_ae' => $this->a_ae,
            'a_af' => $this->a_af,
            'a_ag' => $this->a_ag,
            'a_ah' => $this->a_ah,
            'a_ai' => $this->a_ai,
            'a_aj' => $this->a_aj,
            'a_ak' => $this->a_ak,
            'a_al' => $this->a_al,
            'a_am' => $this->a_am,
            'a_an' => $this->a_an,
            'a_ao' => $this->a_ao,
            'a_ap' => $this->a_ap,
            'a_aq' => $this->a_aq,
            'a_ar' => $this->a_ar,
            'i_i' => $this->i_i,
            'i_j' => $this->i_j,
            'i_k' => $this->i_k,
            'i_l' => $this->i_l,
            'i_m' => $this->i_m,
            'i_n' => $this->i_n,
            'i_o' => $this->i_o,
            'i_p' => $this->i_p,
            'i_q' => $this->i_q,
            'i_r' => $this->i_r,
            'i_s' => $this->i_s,
            'i_t' => $this->i_t,
            'i_u' => $this->i_u,
            'i_v' => $this->i_v,
            'i_w' => $this->i_w,
            'i_x' => $this->i_x,
            'i_y' => $this->i_y,
            'i_z' => $this->i_z,
            'i_aa' => $this->i_aa,
            'i_ab' => $this->i_ab,
            'i_ac' => $this->i_ac,
            'i_ad' => $this->i_ad,
            'i_ae' => $this->i_ae,
            'i_af' => $this->i_af,
            'i_ag' => $this->i_ag,
            'i_ah' => $this->i_ah,
            'i_ai' => $this->i_ai,
            'i_aj' => $this->i_aj,
            'i_ak' => $this->i_ak,
            't_j' => $this->t_j,
            't_k' => $this->t_k,
            't_l' => $this->t_l,
            't_m' => $this->t_m,
            't_n' => $this->t_n,
            't_o' => $this->t_o,
            't_p' => $this->t_p,
            't_q' => $this->t_q,
            't_r' => $this->t_r,
            't_s' => $this->t_s,
            't_t' => $this->t_t,
            't_u' => $this->t_u,
            't_v' => $this->t_v,
            't_w' => $this->t_w,
            't_x' => $this->t_x,
            't_y' => $this->t_y,
            't_z' => $this->t_z,
            't_aa' => $this->t_aa,
            't_ab' => $this->t_ab,
            't_ac' => $this->t_ac,
            't_ad' => $this->t_ad,
            't_ae' => $this->t_ae,
            't_af' => $this->t_af,
            't_ag' => $this->t_ag,
            't_ah' => $this->t_ah,
            't_ai' => $this->t_ai,
            't_aj' => $this->t_aj,
            't_ak' => $this->t_ak,
            't_al' => $this->t_al,
            'aa_j' => $this->aa_j,
            'aa_k' => $this->aa_k,
            'aa_l' => $this->aa_l,
            'aa_m' => $this->aa_m,
            'aa_n' => $this->aa_n,
            'aa_o' => $this->aa_o,
            'aa_p' => $this->aa_p,
            'aa_q' => $this->aa_q,
            'aa_r' => $this->aa_r,
            'aa_s' => $this->aa_s,
            'aa_t' => $this->aa_t,
            'aa_u' => $this->aa_u,
            'aa_v' => $this->aa_v,
            'aa_w' => $this->aa_w,
            'aa_x' => $this->aa_x,
            'aa_y' => $this->aa_y,
            'aa_z' => $this->aa_z,
            'aa_aa' => $this->aa_aa,
            'aa_ab' => $this->aa_ab,
            'aa_ac' => $this->aa_ac,
            'aa_ad' => $this->aa_ad,
            'aa_ae' => $this->aa_ae,
            'aa_af' => $this->aa_af,
            'aa_ag' => $this->aa_ag,
            'aa_ah' => $this->aa_ah,
            'aa_ai' => $this->aa_ai,
            'aa_aj' => $this->aa_aj,
            'aa_ak' => $this->aa_ak,
            'aa_al' => $this->aa_al,
            'aa_am' => $this->aa_am,
            'aa_an' => $this->aa_an,
            'aa_ao' => $this->aa_ao,
            'aa_ap' => $this->aa_ap,
            'aa_aq' => $this->aa_aq,
            'aa_ar' => $this->aa_ar,
            'r_cp' => $this->r_cp,
            'r_date_cp' => $this->r_date_cp,
            'o_cp' => $this->o_cp,
            'o_date_cp' => $this->o_date_cp,
            'a_cp' => $this->a_cp,
            'a_date_cp' => $this->a_date_cp,
            'i_cp' => $this->i_cp,
            'i_date_cp' => $this->i_date_cp,
            't_cp' => $this->t_cp,
            't_date_cp' => $this->t_date_cp,
            'aa_cp' => $this->aa_cp,
            'aa_date_cp' => $this->aa_date_cp,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'r_ak', $this->r_ak])
            ->andFilterWhere(['like', 'r_al', $this->r_al])
            ->andFilterWhere(['like', 'o_ab', $this->o_ab]);

        return $dataProvider;
    }
}
