<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ObjectAct;

/**
 * ObjectActSearch represents the model behind the search form of `app\models\ObjectAct`.
 */
class ObjectActSearch extends ObjectAct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['act_id', 'station_id', 'object_id', 'act_function'], 'integer'],
            [['act_time', 'act_data', 'station_ip_addr'], 'safe'],
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
        $query = ObjectAct::find();

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
            'act_id' => $this->act_id,
            'act_time' => $this->act_time,
            'station_id' => $this->station_id,
            'object_id' => $this->object_id,
            'act_function' => $this->act_function,
        ]);

        $query->andFilterWhere(['like', 'act_data', $this->act_data])
            ->andFilterWhere(['like', 'station_ip_addr', $this->station_ip_addr]);

        return $dataProvider;
    }
}
