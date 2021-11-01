<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblView;

/**
 * TblViewSearch represents the model behind the search form of `app\models\TblView`.
 */
class TblViewSearch extends TblView
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tbl_view_id'], 'integer'],
            [['tbl_view_name', 'description', 'view_name', 'image'], 'safe'],
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
        $query = TblView::find();

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
            'tbl_view_id' => $this->tbl_view_id,
        ]);

        $query->andFilterWhere(['like', 'tbl_view_name', $this->tbl_view_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'view_name', $this->view_name])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
