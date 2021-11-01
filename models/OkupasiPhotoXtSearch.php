<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiPhotoXt;

/**
 * OkupasiPhotoXtSearch represents the model behind the search form of `app\models\OkupasiPhotoXt`.
 */
class OkupasiPhotoXtSearch extends OkupasiPhotoXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'validation', 'created_user_id'], 'integer'],
            [['notes', 'location', 'target', 'view_location', 'created_time'], 'safe'],
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
        $query = OkupasiPhotoXt::find();

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
            'okup_id' => $this->okup_id,
            'validation' => $this->validation,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'target', $this->target])
            ->andFilterWhere(['like', 'view_location', $this->view_location]);

        return $dataProvider;
    }
}
