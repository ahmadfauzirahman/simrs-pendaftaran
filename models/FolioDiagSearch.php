<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioDiag;

/**
 * FolioDiagSearch represents the model behind the search form of `app\models\FolioDiag`.
 */
class FolioDiagSearch extends FolioDiag
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'intern_diag_id', 'icd_id', 'diag_type_id', 'created_by', 'validated_by', 'modified_by', 'deleted_by'], 'integer'],
            [['created_time', 'validated_time', 'modified_time', 'deleted_time'], 'safe'],
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
        $query = FolioDiag::find();

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
            'folio_id' => $this->folio_id,
            'seq' => $this->seq,
            'intern_diag_id' => $this->intern_diag_id,
            'icd_id' => $this->icd_id,
            'diag_type_id' => $this->diag_type_id,
            'created_time' => $this->created_time,
            'created_by' => $this->created_by,
            'validated_time' => $this->validated_time,
            'validated_by' => $this->validated_by,
            'modified_time' => $this->modified_time,
            'modified_by' => $this->modified_by,
            'deleted_time' => $this->deleted_time,
            'deleted_by' => $this->deleted_by,
        ]);

        return $dataProvider;
    }
}
