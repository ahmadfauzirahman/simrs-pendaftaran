<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReferenceType;

/**
 * ReferenceTypeSearch represents the model behind the search form of `app\models\ReferenceType`.
 */
class ReferenceTypeSearch extends ReferenceType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref_type_id', 'bpjs_refer_type', 'created_user_id', 'modified_user_id', 'source', 'bpjs_online', 'city_id', 'district_id', 'subdistrict_id', 'province_id', 'village_id', 'ref_type_group', 'sub_district_id'], 'integer'],
            [['type_name', 'created_time', 'modified_time', 'address_line', 'code_ref', 'pic_name', 'handphone'], 'safe'],
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
        $query = ReferenceType::find();

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
            'ref_type_id' => $this->ref_type_id,
            'bpjs_refer_type' => $this->bpjs_refer_type,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'source' => $this->source,
            'bpjs_online' => $this->bpjs_online,
            'city_id' => $this->city_id,
            'district_id' => $this->district_id,
            'subdistrict_id' => $this->subdistrict_id,
            'province_id' => $this->province_id,
            'village_id' => $this->village_id,
            'ref_type_group' => $this->ref_type_group,
            'sub_district_id' => $this->sub_district_id,
        ]);

        $query->andFilterWhere(['like', 'type_name', $this->type_name])
            ->andFilterWhere(['like', 'address_line', $this->address_line])
            ->andFilterWhere(['like', 'code_ref', $this->code_ref])
            ->andFilterWhere(['like', 'pic_name', $this->pic_name])
            ->andFilterWhere(['like', 'handphone', $this->handphone]);

        return $dataProvider;
    }
}
