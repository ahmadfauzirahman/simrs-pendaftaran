<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArBpjs;

/**
 * ArBpjsSearch represents the model behind the search form of `app\models\ArBpjs`.
 */
class ArBpjsSearch extends ArBpjs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bpjs_sep_no', 'reg_date', 'reg_end_date', 'medrec_no', 'patient_name', 'inacbg', 'reg_dept'], 'safe'],
            [['total_tarif', 'tarif_rs'], 'number'],
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
        $query = ArBpjs::find();

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
            'reg_date' => $this->reg_date,
            'reg_end_date' => $this->reg_end_date,
            'total_tarif' => $this->total_tarif,
            'tarif_rs' => $this->tarif_rs,
        ]);

        $query->andFilterWhere(['like', 'bpjs_sep_no', $this->bpjs_sep_no])
            ->andFilterWhere(['like', 'medrec_no', $this->medrec_no])
            ->andFilterWhere(['like', 'patient_name', $this->patient_name])
            ->andFilterWhere(['like', 'inacbg', $this->inacbg])
            ->andFilterWhere(['like', 'reg_dept', $this->reg_dept]);

        return $dataProvider;
    }
}
