<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsGetSepApproval;

/**
 * BpjsGetSepApprovalSearch represents the model behind the search form of `app\models\BpjsGetSepApproval`.
 */
class BpjsGetSepApprovalSearch extends BpjsGetSepApproval
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kartu', 'tgl_sep', 'keterangan', 'user'], 'safe'],
            [['jns_pelayanan', 'status'], 'integer'],
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
        $query = BpjsGetSepApproval::find();

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
            'tgl_sep' => $this->tgl_sep,
            'jns_pelayanan' => $this->jns_pelayanan,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'no_kartu', $this->no_kartu])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan])
            ->andFilterWhere(['like', 'user', $this->user]);

        return $dataProvider;
    }
}
