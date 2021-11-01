<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedrecTransferDet;

/**
 * MedrecTransferDetSearch represents the model behind the search form of `app\models\MedrecTransferDet`.
 */
class MedrecTransferDetSearch extends MedrecTransferDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_transfer_id', 'seq', 'folio_id'], 'integer'],
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
        $query = MedrecTransferDet::find();

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
            'mr_transfer_id' => $this->mr_transfer_id,
            'seq' => $this->seq,
            'folio_id' => $this->folio_id,
        ]);

        return $dataProvider;
    }
}
