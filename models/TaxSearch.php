<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tax;

/**
 * TaxSearch represents the model behind the search form of `app\models\Tax`.
 */
class TaxSearch extends Tax
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tax_id', 'sales_gl_acc_id', 'purchase_gl_acc_id', 'tax_type', 'amount_calc_type', 'created_user_id', 'modified_user_id'], 'integer'],
            [['tax_name', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = Tax::find();

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
            'tax_id' => $this->tax_id,
            'rate' => $this->rate,
            'sales_gl_acc_id' => $this->sales_gl_acc_id,
            'purchase_gl_acc_id' => $this->purchase_gl_acc_id,
            'tax_type' => $this->tax_type,
            'amount_calc_type' => $this->amount_calc_type,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'tax_name', $this->tax_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
