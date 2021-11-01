<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rldtd;

/**
 * RlDtdSearch represents the model behind the search form of `app\models\Rldtd`.
 */
class RlDtdSearch extends Rldtd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut'], 'integer'],
            [['no_dtd', 'no_rinci', 'nama_dtd'], 'safe'],
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
        $query = Rldtd::find();

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
            'no_urut' => $this->no_urut,
        ]);

        $query->andFilterWhere(['like', 'no_dtd', $this->no_dtd])
            ->andFilterWhere(['like', 'no_rinci', $this->no_rinci])
            ->andFilterWhere(['like', 'nama_dtd', $this->nama_dtd]);

        return $dataProvider;
    }
}
