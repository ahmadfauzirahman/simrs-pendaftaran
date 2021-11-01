<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RegSetup;

/**
 * RegSetupSearch represents the model behind the search form of `app\models\RegSetup`.
 */
class RegSetupSearch extends RegSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'reg_rpt_cat_id', 'order_rpt_cat_id', 'pos_rpt_cat_id', 'billing_pmt_rpt_cat_id', 'nurse_care_rpt_cat_id', 'self_payby_id', 'bpjs_online_payby_id', 'created_user_id', 'modified_user_id', 'folio_gl_posting_type', 'folio_gl_posting_period', 'folio_gl_posting_year', 'folio_gl_journal_id_active', 'default_show_patient', 'rof_rpt_cat_id', 'reregister_restriction', 'auto_post_folio_refer', 'release_cancelled_rsvp'], 'integer'],
            [['created_time', 'modified_time', 'folio_gl_posting_date', 'sustatus_allowed_reg', 'web_rsvp_url'], 'safe'],
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
        $query = RegSetup::find();

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
            'reg_rpt_cat_id' => $this->reg_rpt_cat_id,
            'order_rpt_cat_id' => $this->order_rpt_cat_id,
            'pos_rpt_cat_id' => $this->pos_rpt_cat_id,
            'billing_pmt_rpt_cat_id' => $this->billing_pmt_rpt_cat_id,
            'nurse_care_rpt_cat_id' => $this->nurse_care_rpt_cat_id,
            'self_payby_id' => $this->self_payby_id,
            'bpjs_online_payby_id' => $this->bpjs_online_payby_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'folio_gl_posting_type' => $this->folio_gl_posting_type,
            'folio_gl_posting_date' => $this->folio_gl_posting_date,
            'folio_gl_posting_period' => $this->folio_gl_posting_period,
            'folio_gl_posting_year' => $this->folio_gl_posting_year,
            'folio_gl_journal_id_active' => $this->folio_gl_journal_id_active,
            'default_show_patient' => $this->default_show_patient,
            'rof_rpt_cat_id' => $this->rof_rpt_cat_id,
            'reregister_restriction' => $this->reregister_restriction,
            'auto_post_folio_refer' => $this->auto_post_folio_refer,
            'release_cancelled_rsvp' => $this->release_cancelled_rsvp,
        ]);

        $query->andFilterWhere(['like', 'sustatus_allowed_reg', $this->sustatus_allowed_reg])
            ->andFilterWhere(['like', 'web_rsvp_url', $this->web_rsvp_url]);

        return $dataProvider;
    }
}
