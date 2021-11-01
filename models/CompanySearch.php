<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Company;

/**
 * CompanySearch represents the model behind the search form of `app\models\Company`.
 */
class CompanySearch extends Company
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'numbering_scheme', 'created_user_id', 'modified_user_id'], 'integer'],
            [['company_name', 'address_line1', 'address_line2', 'address_line3', 'city', 'province', 'country', 'phone', 'fax', 'email', 'webpage', 'zipcode', 'logo', 'notes', 'registered_tax_no', 'business_tax_reg_no', 'business_tax_reg_date', 'simple_tax_serial_no', 'standard_tax_serial_no', 'created_time', 'modified_time'], 'safe'],
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
        $query = Company::find();

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
            'business_tax_reg_date' => $this->business_tax_reg_date,
            'numbering_scheme' => $this->numbering_scheme,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'address_line1', $this->address_line1])
            ->andFilterWhere(['like', 'address_line2', $this->address_line2])
            ->andFilterWhere(['like', 'address_line3', $this->address_line3])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'webpage', $this->webpage])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'registered_tax_no', $this->registered_tax_no])
            ->andFilterWhere(['like', 'business_tax_reg_no', $this->business_tax_reg_no])
            ->andFilterWhere(['like', 'simple_tax_serial_no', $this->simple_tax_serial_no])
            ->andFilterWhere(['like', 'standard_tax_serial_no', $this->standard_tax_serial_no]);

        return $dataProvider;
    }
}
