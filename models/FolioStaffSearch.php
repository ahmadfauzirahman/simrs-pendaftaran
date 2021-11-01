<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioStaff;

/**
 * FolioStaffSearch represents the model behind the search form of `app\models\FolioStaff`.
 */
class FolioStaffSearch extends FolioStaff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'staff_id', 'staff_type_id', 'staff_group_id'], 'integer'],
            [['roles'], 'safe'],
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
        $query = FolioStaff::find();

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
            'seq' => $this->seq,
            'staff_id' => $this->staff_id,
            'staff_type_id' => $this->staff_type_id,
            'staff_group_id' => $this->staff_group_id,
        ]);

        $query->andFilterWhere(['like', 'roles', $this->roles]);

        return $dataProvider;
    }
}
