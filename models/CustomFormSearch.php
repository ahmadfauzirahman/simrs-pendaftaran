<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomForm;

/**
 * CustomFormSearch represents the model behind the search form of `app\models\CustomForm`.
 */
class CustomFormSearch extends CustomForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['custom_form_id'], 'integer'],
            [['custom_form_name', 'custom_form_description', 'custom_form_url', 'image'], 'safe'],
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
        $query = CustomForm::find();

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
            'custom_form_id' => $this->custom_form_id,
        ]);

        $query->andFilterWhere(['like', 'custom_form_name', $this->custom_form_name])
            ->andFilterWhere(['like', 'custom_form_description', $this->custom_form_description])
            ->andFilterWhere(['like', 'custom_form_url', $this->custom_form_url])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
