<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ValueEditFarmasiExt;

/**
 * ValueEditFarmasiExtSearch represents the model behind the search form of `app\models\ValueEditFarmasiExt`.
 */
class ValueEditFarmasiExtSearch extends ValueEditFarmasiExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['edit_date', 'created_time', 'modified_time'], 'safe'],
            [['real_value', 'edit_value'], 'number'],
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
        $query = ValueEditFarmasiExt::find();

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
            'reg_id' => $this->reg_id,
            'edit_date' => $this->edit_date,
            'real_value' => $this->real_value,
            'edit_value' => $this->edit_value,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        return $dataProvider;
    }
}
