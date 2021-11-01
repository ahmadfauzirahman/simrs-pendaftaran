<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InformasiNotesExt;

/**
 * InformasiNotesExtSearch represents the model behind the search form of `app\models\InformasiNotesExt`.
 */
class InformasiNotesExtSearch extends InformasiNotesExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_id', 'warehouse_id', 'created_user_id', 'modified_user_id', 'validasi_unit', 'posted'], 'integer'],
            [['informasi_no', 'informasi_date', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = InformasiNotesExt::find();

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
            'informasi_date' => $this->informasi_date,
            'warehouse_id' => $this->warehouse_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'validasi_unit' => $this->validasi_unit,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'informasi_no', $this->informasi_no])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
