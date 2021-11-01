<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VendorServiceExt;

/**
 * VendorServiceExtSearch represents the model behind the search form of `app\models\VendorServiceExt`.
 */
class VendorServiceExtSearch extends VendorServiceExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vendor_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['vendor_name', 'addressline1', 'phone', 'created_time', 'modified_time'], 'safe'],
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
        $query = VendorServiceExt::find();

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
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'vendor_name', $this->vendor_name])
            ->andFilterWhere(['like', 'addressline1', $this->addressline1])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
