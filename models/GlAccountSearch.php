<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlAccount;

/**
 * GlAccountSearch represents the model behind the search form of `app\models\GlAccount`.
 */
class GlAccountSearch extends GlAccount
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_id', 'account_type', 'disabled', 'created_user_id', 'modified_user_id', 'no_urut', 'pc'], 'integer'],
            [['account_no', 'account_name', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = GlAccount::find();

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
            'account_type' => $this->account_type,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'no_urut' => $this->no_urut,
            'pc' => $this->pc,
        ]);

        $query->andFilterWhere(['like', 'account_no', $this->account_no])
            ->andFilterWhere(['like', 'account_name', $this->account_name])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
