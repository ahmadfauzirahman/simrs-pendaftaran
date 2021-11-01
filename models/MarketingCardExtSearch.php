<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarketingCardExt;

/**
 * MarketingCardExtSearch represents the model behind the search form of `app\models\MarketingCardExt`.
 */
class MarketingCardExtSearch extends MarketingCardExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_id', 'staff_id', 'ref_type_id', 'sex', 'village_id', 'subdistrict_id', 'district_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['card_no', 'card_date', 'name', 'place_of_birth', 'birth_date', 'address_line', 'rt', 'rw', 'zipcode', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = MarketingCardExt::find();

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
            'card_id' => $this->card_id,
            'staff_id' => $this->staff_id,
            'card_date' => $this->card_date,
            'ref_type_id' => $this->ref_type_id,
            'sex' => $this->sex,
            'birth_date' => $this->birth_date,
            'village_id' => $this->village_id,
            'subdistrict_id' => $this->subdistrict_id,
            'district_id' => $this->district_id,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'card_no', $this->card_no])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'address_line', $this->address_line])
            ->andFilterWhere(['like', 'rt', $this->rt])
            ->andFilterWhere(['like', 'rw', $this->rw])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
