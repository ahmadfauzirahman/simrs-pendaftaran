<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsPpk;

/**
 * BpjsPpkSearch represents the model behind the search form of `app\models\BpjsPpk`.
 */
class BpjsPpkSearch extends BpjsPpk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ppk_code', 'district_bpjs_code', 'ppk_name'], 'safe'],
            [['ppk_type_id'], 'integer'],
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
        $query = BpjsPpk::find();

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
            'ppk_type_id' => $this->ppk_type_id,
        ]);

        $query->andFilterWhere(['like', 'ppk_code', $this->ppk_code])
            ->andFilterWhere(['like', 'district_bpjs_code', $this->district_bpjs_code])
            ->andFilterWhere(['like', 'ppk_name', $this->ppk_name]);

        return $dataProvider;
    }
}
