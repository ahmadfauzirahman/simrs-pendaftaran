<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PhoneExt;

/**
 * PhoneExtSearch represents the model behind the search form of `app\models\PhoneExt`.
 */
class PhoneExtSearch extends PhoneExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_id', 'phone_type', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['phone_name', 'specialist', 'cp', 'phone_bintang', 'phone_number', 'phone_desc', 'created_time', 'modified_time'], 'safe'],
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
        $query = PhoneExt::find();

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
            'phone_id' => $this->phone_id,
            'phone_type' => $this->phone_type,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'disabled' => $this->disabled,
        ]);

        $query->andFilterWhere(['like', 'phone_name', $this->phone_name])
            ->andFilterWhere(['like', 'specialist', $this->specialist])
            ->andFilterWhere(['like', 'cp', $this->cp])
            ->andFilterWhere(['like', 'phone_bintang', $this->phone_bintang])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'phone_desc', $this->phone_desc]);

        return $dataProvider;
    }
}
