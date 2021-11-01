<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioFarmasiDiagExt;

/**
 * FolioFarmasiDiagExtSearch represents the model behind the search form of `app\models\FolioFarmasiDiagExt`.
 */
class FolioFarmasiDiagExtSearch extends FolioFarmasiDiagExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'created_user_id'], 'integer'],
            [['diagnosa', 'created_time'], 'safe'],
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
        $query = FolioFarmasiDiagExt::find();

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
            'folio_id' => $this->folio_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'diagnosa', $this->diagnosa]);

        return $dataProvider;
    }
}
