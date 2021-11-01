<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TestPhp;

/**
 * TestPhpSearch represents the model behind the search form of `app\models\TestPhp`.
 */
class TestPhpSearch extends TestPhp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['test_php_id'], 'integer'],
            [['test_php_name', 'test_php_url', 'test_php_descr', 'image'], 'safe'],
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
        $query = TestPhp::find();

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
            'test_php_id' => $this->test_php_id,
        ]);

        $query->andFilterWhere(['like', 'test_php_name', $this->test_php_name])
            ->andFilterWhere(['like', 'test_php_url', $this->test_php_url])
            ->andFilterWhere(['like', 'test_php_descr', $this->test_php_descr])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
