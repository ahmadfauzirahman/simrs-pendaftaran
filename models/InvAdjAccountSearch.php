<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InvAdjAccount;

/**
 * InvAdjAccountSearch represents the model behind the search form of `app\models\InvAdjAccount`.
 */
class InvAdjAccountSearch extends InvAdjAccount
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_id', 'gl_account_id', 'location_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['account_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = InvAdjAccount::find();

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
            'account_id' => $this->account_id,
            'gl_account_id' => $this->gl_account_id,
            'location_id' => $this->location_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'account_name', $this->account_name]);

        return $dataProvider;
    }
}
