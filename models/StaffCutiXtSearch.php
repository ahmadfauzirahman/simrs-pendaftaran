<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffCutiXt;

/**
 * StaffCutiXtSearch represents the model behind the search form of `app\models\StaffCutiXt`.
 */
class StaffCutiXtSearch extends StaffCutiXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cuti_id', 'staff_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['date_cuti', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = StaffCutiXt::find();

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
            'cuti_id' => $this->cuti_id,
            'staff_id' => $this->staff_id,
            'date_cuti' => $this->date_cuti,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
