<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MaintRes;

/**
 * MaintResSearch represents the model behind the search form of `app\models\MaintRes`.
 */
class MaintResSearch extends MaintRes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['res_id'], 'integer'],
            [['res_name', 'unit'], 'safe'],
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
        $query = MaintRes::find();

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
            'res_id' => $this->res_id,
            'value' => $this->value,
        ]);

        $query->andFilterWhere(['like', 'res_name', $this->res_name])
            ->andFilterWhere(['like', 'unit', $this->unit]);

        return $dataProvider;
    }
}
