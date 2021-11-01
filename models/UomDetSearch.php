<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UomDet;

/**
 * UomDetSearch represents the model behind the search form of `app\models\UomDet`.
 */
class UomDetSearch extends UomDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uom_id', 'seq'], 'integer'],
            [['unit_name', 'description'], 'safe'],
            [['factor', 'conversion'], 'number'],
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
        $query = UomDet::find();

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
            'uom_id' => $this->uom_id,
            'seq' => $this->seq,
            'factor' => $this->factor,
            'conversion' => $this->conversion,
        ]);

        $query->andFilterWhere(['like', 'unit_name', $this->unit_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
