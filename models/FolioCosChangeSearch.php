<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioCosChange;

/**
 * FolioCosChangeSearch represents the model behind the search form of `app\models\FolioCosChange`.
 */
class FolioCosChangeSearch extends FolioCosChange
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'approval_user_id'], 'integer'],
            [['approval_date', 'seq'], 'safe'],
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
        $query = FolioCosChange::find();

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
            'folio_id' => $this->folio_id,
            'approval_user_id' => $this->approval_user_id,
            'approval_date' => $this->approval_date,
        ]);

        $query->andFilterWhere(['like', 'seq', $this->seq]);

        return $dataProvider;
    }
}
