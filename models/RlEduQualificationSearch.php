<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RlEduQualification;

/**
 * RlEduQualificationSearch represents the model behind the search form of `app\models\RlEduQualification`.
 */
class RlEduQualificationSearch extends RlEduQualification
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_seq'], 'integer'],
            [['edu_qualification_id', 'edu_qualification_name'], 'safe'],
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
        $query = RlEduQualification::find();

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
            'order_seq' => $this->order_seq,
        ]);

        $query->andFilterWhere(['like', 'edu_qualification_id', $this->edu_qualification_id])
            ->andFilterWhere(['like', 'edu_qualification_name', $this->edu_qualification_name]);

        return $dataProvider;
    }
}
