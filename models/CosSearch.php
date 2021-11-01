<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cos;

/**
 * CosSearch represents the model behind the search form of `app\models\Cos`.
 */
class CosSearch extends Cos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cos_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['cos_name', 'description', 'refer_cos_name', 'cos_code_bpjs', 'eklaim_cos_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = Cos::find();

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
            'cos_id' => $this->cos_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'cos_name', $this->cos_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'refer_cos_name', $this->refer_cos_name])
            ->andFilterWhere(['like', 'cos_code_bpjs', $this->cos_code_bpjs])
            ->andFilterWhere(['like', 'eklaim_cos_name', $this->eklaim_cos_name]);

        return $dataProvider;
    }
}
