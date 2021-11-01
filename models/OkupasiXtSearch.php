<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiXt;

/**
 * OkupasiXtSearch represents the model behind the search form of `app\models\OkupasiXt`.
 */
class OkupasiXtSearch extends OkupasiXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'patient_id', 'reg_id', 'occupation_id', 'pay_by_id', 'ref_id', 'sesuaitdk', 'rokk', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16', 'ok7a1', 'ok7a2', 'occup2', 'occup3', 'posted', 'closing', 'status_kelaikan', 'unit_control_id', 'pm', 'created_user_id', 'modified_user_id'], 'integer'],
            [['okup_no', 'okup_tgl', 'kondisi_penyakit', 'ok61', 'ok62', 'ok7b', 'lingkungan', 'control_date', 'rekomendasi', 'ket_control', 'didapati', 'diagnosa', 'pm2', 'tuntutan', 'mkes', 'fungsi1', 'fungsi2', 'fungsi3', 'risiko', 'rekomendasi2', 'rekomendasi3', 'toleransi', 'numkep', 'created_time', 'modified_time'], 'safe'],
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
        $query = OkupasiXt::find();

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
            'okup_id' => $this->okup_id,
            'okup_tgl' => $this->okup_tgl,
            'patient_id' => $this->patient_id,
            'reg_id' => $this->reg_id,
            'occupation_id' => $this->occupation_id,
            'pay_by_id' => $this->pay_by_id,
            'ref_id' => $this->ref_id,
            'sesuaitdk' => $this->sesuaitdk,
            'rokk' => $this->rokk,
            'a1' => $this->a1,
            'a2' => $this->a2,
            'a3' => $this->a3,
            'a4' => $this->a4,
            'a5' => $this->a5,
            'a6' => $this->a6,
            'a7' => $this->a7,
            'a8' => $this->a8,
            'b1' => $this->b1,
            'b2' => $this->b2,
            'b3' => $this->b3,
            'b4' => $this->b4,
            'b5' => $this->b5,
            'b6' => $this->b6,
            'b7' => $this->b7,
            'b8' => $this->b8,
            'b9' => $this->b9,
            'b10' => $this->b10,
            'b11' => $this->b11,
            'b12' => $this->b12,
            'c1' => $this->c1,
            'c2' => $this->c2,
            'c3' => $this->c3,
            'c4' => $this->c4,
            'c5' => $this->c5,
            'c6' => $this->c6,
            'c7' => $this->c7,
            'c8' => $this->c8,
            'c9' => $this->c9,
            'c10' => $this->c10,
            'c11' => $this->c11,
            'c12' => $this->c12,
            'c13' => $this->c13,
            'd1' => $this->d1,
            'd2' => $this->d2,
            'd3' => $this->d3,
            'd4' => $this->d4,
            'd5' => $this->d5,
            'd6' => $this->d6,
            'd7' => $this->d7,
            'd8' => $this->d8,
            'd9' => $this->d9,
            'd10' => $this->d10,
            'd11' => $this->d11,
            'd12' => $this->d12,
            'd13' => $this->d13,
            'd14' => $this->d14,
            'd15' => $this->d15,
            'd16' => $this->d16,
            'ok7a1' => $this->ok7a1,
            'ok7a2' => $this->ok7a2,
            'occup2' => $this->occup2,
            'occup3' => $this->occup3,
            'posted' => $this->posted,
            'closing' => $this->closing,
            'control_date' => $this->control_date,
            'status_kelaikan' => $this->status_kelaikan,
            'unit_control_id' => $this->unit_control_id,
            'pm' => $this->pm,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'okup_no', $this->okup_no])
            ->andFilterWhere(['like', 'kondisi_penyakit', $this->kondisi_penyakit])
            ->andFilterWhere(['like', 'ok61', $this->ok61])
            ->andFilterWhere(['like', 'ok62', $this->ok62])
            ->andFilterWhere(['like', 'ok7b', $this->ok7b])
            ->andFilterWhere(['like', 'lingkungan', $this->lingkungan])
            ->andFilterWhere(['like', 'rekomendasi', $this->rekomendasi])
            ->andFilterWhere(['like', 'ket_control', $this->ket_control])
            ->andFilterWhere(['like', 'didapati', $this->didapati])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'pm2', $this->pm2])
            ->andFilterWhere(['like', 'tuntutan', $this->tuntutan])
            ->andFilterWhere(['like', 'mkes', $this->mkes])
            ->andFilterWhere(['like', 'fungsi1', $this->fungsi1])
            ->andFilterWhere(['like', 'fungsi2', $this->fungsi2])
            ->andFilterWhere(['like', 'fungsi3', $this->fungsi3])
            ->andFilterWhere(['like', 'risiko', $this->risiko])
            ->andFilterWhere(['like', 'rekomendasi2', $this->rekomendasi2])
            ->andFilterWhere(['like', 'rekomendasi3', $this->rekomendasi3])
            ->andFilterWhere(['like', 'toleransi', $this->toleransi])
            ->andFilterWhere(['like', 'numkep', $this->numkep]);

        return $dataProvider;
    }
}
