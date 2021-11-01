<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReferensiOkupasiXt;

/**
 * ReferensiOkupasiXtSearch represents the model behind the search form of `app\models\ReferensiOkupasiXt`.
 */
class ReferensiOkupasiXtSearch extends ReferensiOkupasiXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref_id', 'disabled', 'created_user_id'], 'integer'],
            [['referensi_name', 'created_time'], 'safe'],
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
        $query = ReferensiOkupasiXt::find();

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
            'ref_id' => $this->ref_id,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'referensi_name', $this->referensi_name]);

        return $dataProvider;
    }
}
