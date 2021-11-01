<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssetLocation;

/**
 * AssetLocationSearch represents the model behind the search form of `app\models\AssetLocation`.
 */
class AssetLocationSearch extends AssetLocation
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_location_id', 'asset_id', 'location_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['asset_location_no', 'location_date', 'description', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = AssetLocation::find();

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
            'asset_location_id' => $this->asset_location_id,
            'asset_id' => $this->asset_id,
            'location_date' => $this->location_date,
            'location_id' => $this->location_id,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'asset_location_no', $this->asset_location_no])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
