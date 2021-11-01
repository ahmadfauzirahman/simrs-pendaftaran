<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PicListPayXt;

/**
 * PicListPayXtSearch represents the model behind the search form of `app\models\PicListPayXt`.
 */
class PicListPayXtSearch extends PicListPayXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_id', 'seq', 'pic_id'], 'integer'],
            [['amount'], 'number'],
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
        $query = PicListPayXt::find();

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
            'pay_id' => $this->pay_id,
            'seq' => $this->seq,
            'pic_id' => $this->pic_id,
            'amount' => $this->amount,
        ]);

        return $dataProvider;
    }
}
