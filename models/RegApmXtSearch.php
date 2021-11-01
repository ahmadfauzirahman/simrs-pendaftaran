<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegApmXt;

/**
 * RegApmXtSearch represents the model behind the search form of `app\models\RegApmXt`.
 */
class RegApmXtSearch extends RegApmXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'created_user_id', 'post_rm', 'flag_post'], 'integer'],
            [['date_cetak', 'date_post_rm'], 'safe'],
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
        $query = RegApmXt::find();

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
            'date_cetak' => $this->date_cetak,
            'created_user_id' => $this->created_user_id,
            'post_rm' => $this->post_rm,
            'date_post_rm' => $this->date_post_rm,
            'flag_post' => $this->flag_post,
        ]);

        return $dataProvider;
    }
}
