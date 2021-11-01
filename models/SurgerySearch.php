<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Surgery;

/**
 * SurgerySearch represents the model behind the search form of `app\models\Surgery`.
 */
class SurgerySearch extends Surgery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'staff_ahli_bedah', 'staff_ahli_anastesi', 'staff_asisten', 'pemeriksaan_patologi', 'konsul_op', 'staff_konsul', 'klasifikasi_emergensi', 'klasifikasi_elektif', 'klasifikasi_poliklinis', 'klasifikasi_ods', 'klasifikasi_besar', 'klasifikasi_khusus', 'klasifikasi_sedang', 'klasifikasi_kecil', 'report_surgery_id', 'created_user_id', 'modified_user_id', 'modified_time', 'posted'], 'integer'],
            [['staff_nurse_instrumen', 'diag_pra_op', 'diag_pasca_op', 'jaringan_eksisi', 'op_name', 'tgl_op', 'start_op', 'end_op', 'end_durasi', 'surgery1', 'surgery2', 'surgery3', 'surgery4', 'report_name', 'created_time'], 'safe'],
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
        $query = Surgery::find();

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
            'staff_ahli_bedah' => $this->staff_ahli_bedah,
            'staff_ahli_anastesi' => $this->staff_ahli_anastesi,
            'staff_asisten' => $this->staff_asisten,
            'pemeriksaan_patologi' => $this->pemeriksaan_patologi,
            'konsul_op' => $this->konsul_op,
            'staff_konsul' => $this->staff_konsul,
            'tgl_op' => $this->tgl_op,
            'start_op' => $this->start_op,
            'end_op' => $this->end_op,
            'klasifikasi_emergensi' => $this->klasifikasi_emergensi,
            'klasifikasi_elektif' => $this->klasifikasi_elektif,
            'klasifikasi_poliklinis' => $this->klasifikasi_poliklinis,
            'klasifikasi_ods' => $this->klasifikasi_ods,
            'klasifikasi_besar' => $this->klasifikasi_besar,
            'klasifikasi_khusus' => $this->klasifikasi_khusus,
            'klasifikasi_sedang' => $this->klasifikasi_sedang,
            'klasifikasi_kecil' => $this->klasifikasi_kecil,
            'report_surgery_id' => $this->report_surgery_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'staff_nurse_instrumen', $this->staff_nurse_instrumen])
            ->andFilterWhere(['like', 'diag_pra_op', $this->diag_pra_op])
            ->andFilterWhere(['like', 'diag_pasca_op', $this->diag_pasca_op])
            ->andFilterWhere(['like', 'jaringan_eksisi', $this->jaringan_eksisi])
            ->andFilterWhere(['like', 'op_name', $this->op_name])
            ->andFilterWhere(['like', 'end_durasi', $this->end_durasi])
            ->andFilterWhere(['like', 'surgery1', $this->surgery1])
            ->andFilterWhere(['like', 'surgery2', $this->surgery2])
            ->andFilterWhere(['like', 'surgery3', $this->surgery3])
            ->andFilterWhere(['like', 'surgery4', $this->surgery4])
            ->andFilterWhere(['like', 'report_name', $this->report_name]);

        return $dataProvider;
    }
}
