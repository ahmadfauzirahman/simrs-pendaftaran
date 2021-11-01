<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffDet;

/**
 * StaffDetSearch represents the model behind the search form of `app\models\StaffDet`.
 */
class StaffDetSearch extends StaffDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'seq', 'item_type_id'], 'integer'],
            [['staff_pct', 'hospital_pct'], 'number'],
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
        $query = StaffDet::find();

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
            'staff_id' => $this->staff_id,
            'seq' => $this->seq,
            'item_type_id' => $this->item_type_id,
            'staff_pct' => $this->staff_pct,
            'hospital_pct' => $this->hospital_pct,
        ]);

        return $dataProvider;
    }
}
