<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Icd9;

/**
 * Icd9Search represents the model behind the search form of `app\models\Icd9`.
 */
class Icd9Search extends Icd9
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_id', 'icd_type_id', 'parent_icd_id', 'created_user_id', 'modified_user_id', 'dtd_id'], 'integer'],
            [['icd_code', 'description', 'short_description', 'create_time', 'modified_time'], 'safe'],
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
        $query = Icd9::find();

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
            'icd_id' => $this->icd_id,
            'icd_type_id' => $this->icd_type_id,
            'parent_icd_id' => $this->parent_icd_id,
            'created_user_id' => $this->created_user_id,
            'create_time' => $this->create_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'dtd_id' => $this->dtd_id,
        ]);

        $query->andFilterWhere(['like', 'icd_code', $this->icd_code])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'short_description', $this->short_description]);

        return $dataProvider;
    }
}
