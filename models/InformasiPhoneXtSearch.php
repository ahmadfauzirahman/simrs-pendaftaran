<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InformasiPhoneXt;

/**
 * InformasiPhoneXtSearch represents the model behind the search form of `app\models\InformasiPhoneXt`.
 */
class InformasiPhoneXtSearch extends InformasiPhoneXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_id', 'seq', 'reg_id', 'created_user_id'], 'integer'],
            [['catatan', 'created_time'], 'safe'],
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
        $query = InformasiPhoneXt::find();

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
            'informasi_id' => $this->informasi_id,
            'seq' => $this->seq,
            'reg_id' => $this->reg_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'catatan', $this->catatan]);

        return $dataProvider;
    }
}
