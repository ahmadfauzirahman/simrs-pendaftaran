<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DiagOpExt;

/**
 * DiagOpExtSearch represents the model behind the search form of `app\models\DiagOpExt`.
 */
class DiagOpExtSearch extends DiagOpExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diag_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['item_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = DiagOpExt::find();

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
            'diag_id' => $this->diag_id,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'item_name', $this->item_name]);

        return $dataProvider;
    }
}
