<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subdistrict;

/**
 * SubdistrictSearch represents the model behind the search form of `app\models\Subdistrict`.
 */
class SubdistrictSearch extends Subdistrict
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subdistrict_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['subdistrict_name', 'created_time', 'modified_time', 'subdistrict_bpjs_code', 'district_bpjs_code'], 'safe'],
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
        $query = Subdistrict::find();

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
            'subdistrict_id' => $this->subdistrict_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'subdistrict_name', $this->subdistrict_name])
            ->andFilterWhere(['like', 'subdistrict_bpjs_code', $this->subdistrict_bpjs_code])
            ->andFilterWhere(['like', 'district_bpjs_code', $this->district_bpjs_code]);

        return $dataProvider;
    }
}
