<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FormControlXt;

/**
 * FormControlXtSearch represents the model behind the search form of `app\models\FormControlXt`.
 */
class FormControlXtSearch extends FormControlXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['control_id', 'folio_id', 'unit_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['control_no', 'form_date', 'control_date', 'diagnosa', 'therapi', 'alasan', 'time_dokter', 'created_time', 'modified_time'], 'safe'],
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
        $query = FormControlXt::find();

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
            'control_id' => $this->control_id,
            'form_date' => $this->form_date,
            'control_date' => $this->control_date,
            'folio_id' => $this->folio_id,
            'unit_id' => $this->unit_id,
            'time_dokter' => $this->time_dokter,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'control_no', $this->control_no])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'therapi', $this->therapi])
            ->andFilterWhere(['like', 'alasan', $this->alasan]);

        return $dataProvider;
    }
}
