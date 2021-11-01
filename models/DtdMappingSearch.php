<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DtdMapping;

/**
 * DtdMappingSearch represents the model behind the search form of `app\models\DtdMapping`.
 */
class DtdMappingSearch extends DtdMapping
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_id', 'DTD'], 'integer'],
            [['icd_code', 'description'], 'safe'],
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
        $query = DtdMapping::find();

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
            'icd_id' => $this->icd_id,
            'DTD' => $this->DTD,
        ]);

        $query->andFilterWhere(['like', 'icd_code', $this->icd_code])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
