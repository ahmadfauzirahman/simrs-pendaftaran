<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupBodyItemXt;

/**
 * OkupBodyItemXtSearch represents the model behind the search form of `app\models\OkupBodyItemXt`.
 */
class OkupBodyItemXtSearch extends OkupBodyItemXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body_id', 'body_type'], 'integer'],
            [['body_name'], 'safe'],
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
        $query = OkupBodyItemXt::find();

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
            'body_id' => $this->body_id,
            'body_type' => $this->body_type,
        ]);

        $query->andFilterWhere(['like', 'body_name', $this->body_name]);

        return $dataProvider;
    }
}
