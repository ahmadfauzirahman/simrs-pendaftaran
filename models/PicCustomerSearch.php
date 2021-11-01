<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PicCustomer;

/**
 * PicCustomerSearch represents the model behind the search form of `app\models\PicCustomer`.
 */
class PicCustomerSearch extends PicCustomer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pic_id', 'bank_id', 'customer_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['pic_name', 'phone', 'rek_no', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = PicCustomer::find();

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
            'pic_id' => $this->pic_id,
            'bank_id' => $this->bank_id,
            'customer_id' => $this->customer_id,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'pic_name', $this->pic_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'rek_no', $this->rek_no])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
