<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegOpExt;

/**
 * RegOpExtSearch represents the model behind the search form of `app\models\RegOpExt`.
 */
class RegOpExtSearch extends RegOpExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_op_id', 'reg_id', 'diag_medis_id', 'tind_medis_id', 'ot_1', 'ot_2', 'ot_3', 'ot_4', 'ot_5', 'ot_6', 'a_1', 'a_2', 'a_3', 'a_4', 'g_1', 'g_2', 'g_3', 'g_4', 'g_5', 'am_1', 'am_2', 'am_3', 'am_4', 'am_5', 'am_6', 'am_7', 'am_8', 'staff_kons', 'staff_op', 'staff_anes', 'staff_panes', 'staff_anak', 'asisten_id', 'instrument_id', 'on_loop', 'sa_1', 'sa_2', 'ods_1', 'ods_2', 'ods_3', 'pj_id', 'rr_id', 'pa', 'spes_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['reg_op_no', 'date_op', 'time_op1', 'time_op2', 'time_op3', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = RegOpExt::find();

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
            'reg_op_id' => $this->reg_op_id,
            'reg_id' => $this->reg_id,
            'date_op' => $this->date_op,
            'diag_medis_id' => $this->diag_medis_id,
            'tind_medis_id' => $this->tind_medis_id,
            'ot_1' => $this->ot_1,
            'ot_2' => $this->ot_2,
            'ot_3' => $this->ot_3,
            'ot_4' => $this->ot_4,
            'ot_5' => $this->ot_5,
            'ot_6' => $this->ot_6,
            'a_1' => $this->a_1,
            'a_2' => $this->a_2,
            'a_3' => $this->a_3,
            'a_4' => $this->a_4,
            'g_1' => $this->g_1,
            'g_2' => $this->g_2,
            'g_3' => $this->g_3,
            'g_4' => $this->g_4,
            'g_5' => $this->g_5,
            'am_1' => $this->am_1,
            'am_2' => $this->am_2,
            'am_3' => $this->am_3,
            'am_4' => $this->am_4,
            'am_5' => $this->am_5,
            'am_6' => $this->am_6,
            'am_7' => $this->am_7,
            'am_8' => $this->am_8,
            'time_op1' => $this->time_op1,
            'time_op2' => $this->time_op2,
            'time_op3' => $this->time_op3,
            'staff_kons' => $this->staff_kons,
            'staff_op' => $this->staff_op,
            'staff_anes' => $this->staff_anes,
            'staff_panes' => $this->staff_panes,
            'staff_anak' => $this->staff_anak,
            'asisten_id' => $this->asisten_id,
            'instrument_id' => $this->instrument_id,
            'on_loop' => $this->on_loop,
            'sa_1' => $this->sa_1,
            'sa_2' => $this->sa_2,
            'ods_1' => $this->ods_1,
            'ods_2' => $this->ods_2,
            'ods_3' => $this->ods_3,
            'pj_id' => $this->pj_id,
            'rr_id' => $this->rr_id,
            'pa' => $this->pa,
            'spes_id' => $this->spes_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'reg_op_no', $this->reg_op_no])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
