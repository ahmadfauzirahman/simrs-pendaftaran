<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dtd;

/**
 * DtdSearch represents the model behind the search form of `app\models\Dtd`.
 */
class DtdSearch extends Dtd
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dtd_id', 'no_urut', 'created_user_id', 'modified_user_id', 'dtd_type'], 'integer'],
            [['dtd_no', 'icd_descr', 'dtd_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = Dtd::find();

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
            'dtd_id' => $this->dtd_id,
            'no_urut' => $this->no_urut,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'dtd_type' => $this->dtd_type,
        ]);

        $query->andFilterWhere(['like', 'dtd_no', $this->dtd_no])
            ->andFilterWhere(['like', 'icd_descr', $this->icd_descr])
            ->andFilterWhere(['like', 'dtd_name', $this->dtd_name]);

        return $dataProvider;
    }
}
