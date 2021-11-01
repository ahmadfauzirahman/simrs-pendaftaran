<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vendor;

/**
 * VendorSearch represents the model behind the search form of `app\models\Vendor`.
 */
class VendorSearch extends Vendor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id', 'ven_type_id', 'ven_group_id', 'tax1_id', 'tax2_id', 'currency_id', 'cod', 'net_days', 'disc_days', 'disabled', 'print_message', 'created_user_id', 'modified_user_id', 'carrier_id'], 'integer'],
            [['vendor_no', 'vendor_name', 'address_line1', 'address_line2', 'city', 'state_prov', 'zipcode', 'country', 'contact', 'phone', 'fax', 'email', 'webpage', 'tax_no', 'message_line1', 'message_line2', 'notes', 'created_time', 'modified_time'], 'safe'],
            [['disc_pc'], 'number'],
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
        $query = Vendor::find();

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
            'vendor_id' => $this->vendor_id,
            'ven_type_id' => $this->ven_type_id,
            'ven_group_id' => $this->ven_group_id,
            'tax1_id' => $this->tax1_id,
            'tax2_id' => $this->tax2_id,
            'currency_id' => $this->currency_id,
            'cod' => $this->cod,
            'net_days' => $this->net_days,
            'disc_days' => $this->disc_days,
            'disc_pc' => $this->disc_pc,
            'disabled' => $this->disabled,
            'print_message' => $this->print_message,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'carrier_id' => $this->carrier_id,
        ]);

        $query->andFilterWhere(['like', 'vendor_no', $this->vendor_no])
            ->andFilterWhere(['like', 'vendor_name', $this->vendor_name])
            ->andFilterWhere(['like', 'address_line1', $this->address_line1])
            ->andFilterWhere(['like', 'address_line2', $this->address_line2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state_prov', $this->state_prov])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'webpage', $this->webpage])
            ->andFilterWhere(['like', 'tax_no', $this->tax_no])
            ->andFilterWhere(['like', 'message_line1', $this->message_line1])
            ->andFilterWhere(['like', 'message_line2', $this->message_line2])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
