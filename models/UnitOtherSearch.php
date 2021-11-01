<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UnitOther;

/**
 * UnitOtherSearch represents the model behind the search form of `app\models\UnitOther`.
 */
class UnitOtherSearch extends UnitOther
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_other_id', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['unit_other_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = UnitOther::find();

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
            'unit_other_id' => $this->unit_other_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'disabled' => $this->disabled,
        ]);

        $query->andFilterWhere(['like', 'unit_other_name', $this->unit_other_name]);

        return $dataProvider;
    }
}
