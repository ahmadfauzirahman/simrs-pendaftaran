<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlbalanceExt;

/**
 * GlBalanceExtSearch represents the model behind the search form of `app\models\GlbalanceExt`.
 */
class GlBalanceExtSearch extends GlbalanceExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gl_id', 'account_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['gl_year', 'created_time', 'modified_time'], 'safe'],
            [['opening_balance', 'balance'], 'number'],
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
        $query = GlbalanceExt::find();

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
            'gl_id' => $this->gl_id,
            'account_id' => $this->account_id,
            'gl_year' => $this->gl_year,
            'opening_balance' => $this->opening_balance,
            'balance' => $this->balance,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        return $dataProvider;
    }
}
