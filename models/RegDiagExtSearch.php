<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegDiagExt;

/**
 * RegDiagExtSearch represents the model behind the search form of `app\models\RegDiagExt`.
 */
class RegDiagExtSearch extends RegDiagExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'seq', 'icd_id', 'diag_type_id', 'deleted_id', 'created_by', 'modified_by'], 'integer'],
            [['price'], 'number'],
            [['tindakan', 'created_time', 'modified_time'], 'safe'],
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
        $query = RegDiagExt::find();

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
            'seq' => $this->seq,
            'icd_id' => $this->icd_id,
            'diag_type_id' => $this->diag_type_id,
            'price' => $this->price,
            'deleted_id' => $this->deleted_id,
            'created_time' => $this->created_time,
            'created_by' => $this->created_by,
            'modified_by' => $this->modified_by,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'tindakan', $this->tindakan]);

        return $dataProvider;
    }
}
