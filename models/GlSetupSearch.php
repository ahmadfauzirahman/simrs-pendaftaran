<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlSetup;

/**
 * GlSetupSearch represents the model behind the search form of `app\models\GlSetup`.
 */
class GlSetupSearch extends GlSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'default_journal_type_id', 'default_show_journal', 'journal_slip_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
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
        $query = GlSetup::find();

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
            'default_journal_type_id' => $this->default_journal_type_id,
            'default_show_journal' => $this->default_show_journal,
            'journal_slip_rpt_cat_id' => $this->journal_slip_rpt_cat_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        return $dataProvider;
    }
}
