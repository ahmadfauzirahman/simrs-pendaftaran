<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Currency;

/**
 * CurrencySearch represents the model behind the search form of `app\models\Currency`.
 */
class CurrencySearch extends Currency
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency_id', 'created_user_id', 'modified_user_id', 'exchg_gl_acc_id', 'ap_gl_acc_id', 'ap_disc_gl_acc_id', 'ap_dp_gl_acc_id', 'ap_pdc_gl_acc_id', 'ar_gl_acc_id', 'ar_disc_gl_acc_id', 'ar_dp_gl_acc_id', 'ar_pdc_gl_acc_id', 'pl_gl_acc_id', 'rounding_gl_acc_id', 'writeoff_gl_acc_id', 'rounding_type'], 'integer'],
            [['currency_name', 'symbol', 'created_time', 'modified_time'], 'safe'],
            [['exchange_rate', 'taxation_rate', 'rounding_value'], 'number'],
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
        $query = Currency::find();

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
            'exchange_rate' => $this->exchange_rate,
            'taxation_rate' => $this->taxation_rate,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'exchg_gl_acc_id' => $this->exchg_gl_acc_id,
            'ap_gl_acc_id' => $this->ap_gl_acc_id,
            'ap_disc_gl_acc_id' => $this->ap_disc_gl_acc_id,
            'ap_dp_gl_acc_id' => $this->ap_dp_gl_acc_id,
            'ap_pdc_gl_acc_id' => $this->ap_pdc_gl_acc_id,
            'ar_gl_acc_id' => $this->ar_gl_acc_id,
            'ar_disc_gl_acc_id' => $this->ar_disc_gl_acc_id,
            'ar_dp_gl_acc_id' => $this->ar_dp_gl_acc_id,
            'ar_pdc_gl_acc_id' => $this->ar_pdc_gl_acc_id,
            'pl_gl_acc_id' => $this->pl_gl_acc_id,
            'rounding_gl_acc_id' => $this->rounding_gl_acc_id,
            'writeoff_gl_acc_id' => $this->writeoff_gl_acc_id,
            'rounding_type' => $this->rounding_type,
            'rounding_value' => $this->rounding_value,
        ]);

        $query->andFilterWhere(['like', 'currency_name', $this->currency_name])
            ->andFilterWhere(['like', 'symbol', $this->symbol]);

        return $dataProvider;
    }
}
