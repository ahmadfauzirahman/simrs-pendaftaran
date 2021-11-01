<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NInvSetup;

/**
 * NInvSetupSearch represents the model behind the search form of `app\models\NInvSetup`.
 */
class NInvSetupSearch extends NInvSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'default_show_transfer', 'count_adjust_in_acc_id', 'count_adjust_out_acc_id', 'adj_rpt_cat_id', 'transfer_rpt_cat_id', 'count_rpt_cat_id', 'default_show_adjustment', 'default_show_count', 'adj_gl_jtype_id', 'default_show_item', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
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
        $query = NInvSetup::find();

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
            'company_id' => $this->company_id,
            'default_show_transfer' => $this->default_show_transfer,
            'count_adjust_in_acc_id' => $this->count_adjust_in_acc_id,
            'count_adjust_out_acc_id' => $this->count_adjust_out_acc_id,
            'adj_rpt_cat_id' => $this->adj_rpt_cat_id,
            'transfer_rpt_cat_id' => $this->transfer_rpt_cat_id,
            'count_rpt_cat_id' => $this->count_rpt_cat_id,
            'default_show_adjustment' => $this->default_show_adjustment,
            'default_show_count' => $this->default_show_count,
            'adj_gl_jtype_id' => $this->adj_gl_jtype_id,
            'default_show_item' => $this->default_show_item,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        return $dataProvider;
    }
}
