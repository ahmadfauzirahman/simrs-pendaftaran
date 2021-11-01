<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssetMvDet;

/**
 * AssetMvDetSearch represents the model behind the search form of `app\models\AssetMvDet`.
 */
class AssetMvDetSearch extends AssetMvDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mv_id', 'seq', 'asset_id'], 'integer'],
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
        $query = AssetMvDet::find();

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
            'mv_id' => $this->mv_id,
            'seq' => $this->seq,
            'asset_id' => $this->asset_id,
        ]);

        return $dataProvider;
    }
}
