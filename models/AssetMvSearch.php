<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssetMv;

/**
 * AssetMvSearch represents the model behind the search form of `app\models\AssetMv`.
 */
class AssetMvSearch extends AssetMv
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mv_id', 'mv_type', 'posted', 'created_user_id', 'modified_user_id', 'asset_id', 'warehouse_id'], 'integer'],
            [['mv_no', 'mv_date', 'person_in_charge', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = AssetMv::find();

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
            'mv_date' => $this->mv_date,
            'mv_type' => $this->mv_type,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'asset_id' => $this->asset_id,
            'warehouse_id' => $this->warehouse_id,
        ]);

        $query->andFilterWhere(['like', 'mv_no', $this->mv_no])
            ->andFilterWhere(['like', 'person_in_charge', $this->person_in_charge])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
