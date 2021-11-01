<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inacbgs;

/**
 * InacbgsSearch represents the model behind the search form of `app\models\Inacbgs`.
 */
class InacbgsSearch extends Inacbgs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inacbgs_id', 'cos_id'], 'integer'],
            [['inacbgs_code', 'inacbgs_name'], 'safe'],
            [['value'], 'number'],
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
        $query = Inacbgs::find();

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
            'inacbgs_id' => $this->inacbgs_id,
            'cos_id' => $this->cos_id,
            'value' => $this->value,
        ]);

        $query->andFilterWhere(['like', 'inacbgs_code', $this->inacbgs_code])
            ->andFilterWhere(['like', 'inacbgs_name', $this->inacbgs_name]);

        return $dataProvider;
    }
}
