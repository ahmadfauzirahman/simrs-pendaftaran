<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffFeeCalc;

/**
 * StaffFeeCalcSearch represents the model behind the search form of `app\models\StaffFeeCalc`.
 */
class StaffFeeCalcSearch extends StaffFeeCalc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'folio_id', 'folio_seq', 'item_id', 'journal_id', 'gl_jfo_det_seq'], 'integer'],
            [['trans_date'], 'safe'],
            [['trans_amount', 'share_amount', 'tax_amount'], 'number'],
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
        $query = StaffFeeCalc::find();

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
            'trans_date' => $this->trans_date,
            'folio_id' => $this->folio_id,
            'folio_seq' => $this->folio_seq,
            'item_id' => $this->item_id,
            'trans_amount' => $this->trans_amount,
            'share_amount' => $this->share_amount,
            'tax_amount' => $this->tax_amount,
            'journal_id' => $this->journal_id,
            'gl_jfo_det_seq' => $this->gl_jfo_det_seq,
        ]);

        return $dataProvider;
    }
}
