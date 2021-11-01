<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\McuDetExt;

/**
 * McuDetExtSearch represents the model behind the search form of `app\models\McuDetExt`.
 */
class McuDetExtSearch extends McuDetExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mcu_id', 'seq', 'patient_id', 'reg_id', 'folio_id', 'created_user_id', 'input_lab', 'input_rad'], 'integer'],
            [['amount'], 'number'],
            [['created_time', 'notes'], 'safe'],
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
        $query = McuDetExt::find();

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
            'mcu_id' => $this->mcu_id,
            'seq' => $this->seq,
            'patient_id' => $this->patient_id,
            'reg_id' => $this->reg_id,
            'folio_id' => $this->folio_id,
            'amount' => $this->amount,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'input_lab' => $this->input_lab,
            'input_rad' => $this->input_rad,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
