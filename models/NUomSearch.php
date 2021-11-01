<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NUom;

/**
 * NUomSearch represents the model behind the search form of `app\models\NUom`.
 */
class NUomSearch extends NUom
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uom_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['uom_name', 'main_unit', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = NUom::find();

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
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'uom_name', $this->uom_name])
            ->andFilterWhere(['like', 'main_unit', $this->main_unit])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
