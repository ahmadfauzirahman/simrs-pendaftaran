<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CurHisExchg;

/**
 * CurHisExchgSearch represents the model behind the search form of `app\models\CurHisExchg`.
 */
class CurHisExchgSearch extends CurHisExchg
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency_id', 'seq', 'modified_user_id'], 'integer'],
            [['modified_time'], 'safe'],
            [['rate'], 'number'],
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
        $query = CurHisExchg::find();

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
            'currency_id' => $this->currency_id,
            'seq' => $this->seq,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'rate' => $this->rate,
        ]);

        return $dataProvider;
    }
}
