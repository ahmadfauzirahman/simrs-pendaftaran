<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PayBy;

/**
 * PayBySearch represents the model behind the search form of `app\models\PayBy`.
 */
class PayBySearch extends PayBy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay_by_id', 'cos_id', 'closing_payment_id', 'authorize_cos_change', 'dept_availability', 'item_availability', 'follow_cos', 'created_user_id', 'modified_user_id', 'check_membership', 'bpjs_online', 'disabled', 'used_by_web_reservation'], 'integer'],
            [['pay_by_name', 'created_time', 'modified_time', 'description', 'disabled_reason', 'pay_by_group', 'pay_by_group_ext'], 'safe'],
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
        $query = PayBy::find();

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
            'pay_by_id' => $this->pay_by_id,
            'cos_id' => $this->cos_id,
            'closing_payment_id' => $this->closing_payment_id,
            'authorize_cos_change' => $this->authorize_cos_change,
            'dept_availability' => $this->dept_availability,
            'item_availability' => $this->item_availability,
            'follow_cos' => $this->follow_cos,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'check_membership' => $this->check_membership,
            'bpjs_online' => $this->bpjs_online,
            'disabled' => $this->disabled,
            'used_by_web_reservation' => $this->used_by_web_reservation,
        ]);

        $query->andFilterWhere(['like', 'pay_by_name', $this->pay_by_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'disabled_reason', $this->disabled_reason])
            ->andFilterWhere(['like', 'pay_by_group', $this->pay_by_group])
            ->andFilterWhere(['like', 'pay_by_group_ext', $this->pay_by_group_ext]);

        return $dataProvider;
    }
}
