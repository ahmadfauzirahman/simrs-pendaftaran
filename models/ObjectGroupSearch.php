<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ObjectGroup;

/**
 * ObjectGroupSearch represents the model behind the search form of `app\models\ObjectGroup`.
 */
class ObjectGroupSearch extends ObjectGroup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['object_group_id'], 'integer'],
            [['object_group_name'], 'safe'],
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
        $query = ObjectGroup::find();

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
            'object_group_id' => $this->object_group_id,
        ]);

        $query->andFilterWhere(['like', 'object_group_name', $this->object_group_name]);

        return $dataProvider;
    }
}
