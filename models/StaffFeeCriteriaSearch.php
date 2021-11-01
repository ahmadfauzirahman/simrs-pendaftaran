<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffFeeCriteria;

/**
 * StaffFeeCriteriaSearch represents the model behind the search form of `app\models\StaffFeeCriteria`.
 */
class StaffFeeCriteriaSearch extends StaffFeeCriteria
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'item_id', 'item_type_ide', 'item_group_id', 'dept_id', 'unit_id', 'sub_unit_id', 'service_cos_id', 'pay_by_id', 'changeto_account_id'], 'integer'],
            [['share_dr_fixed', 'share_dr_pct'], 'number'],
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
        $query = StaffFeeCriteria::find();

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
            'staff_id' => $this->staff_id,
            'item_id' => $this->item_id,
            'item_type_ide' => $this->item_type_ide,
            'item_group_id' => $this->item_group_id,
            'dept_id' => $this->dept_id,
            'unit_id' => $this->unit_id,
            'sub_unit_id' => $this->sub_unit_id,
            'service_cos_id' => $this->service_cos_id,
            'pay_by_id' => $this->pay_by_id,
            'changeto_account_id' => $this->changeto_account_id,
            'share_dr_fixed' => $this->share_dr_fixed,
            'share_dr_pct' => $this->share_dr_pct,
        ]);

        return $dataProvider;
    }
}
