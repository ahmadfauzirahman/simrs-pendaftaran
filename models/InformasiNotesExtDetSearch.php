<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InformasiNotesExtDet;

/**
 * InformasiNotesExtDetSearch represents the model behind the search form of `app\models\InformasiNotesExtDet`.
 */
class InformasiNotesExtDetSearch extends InformasiNotesExtDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_id', 'seq', 'reg_id', 'posted'], 'integer'],
            [['notes', 'catatan'], 'safe'],
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
        $query = InformasiNotesExtDet::find();

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
            'informasi_id' => $this->informasi_id,
            'seq' => $this->seq,
            'reg_id' => $this->reg_id,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
