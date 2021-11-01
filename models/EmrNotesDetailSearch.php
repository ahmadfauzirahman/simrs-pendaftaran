<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmrNotesDetail;

/**
 * EmrNotesDetailSearch represents the model behind the search form of `app\models\EmrNotesDetail`.
 */
class EmrNotesDetailSearch extends EmrNotesDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notes_id', 'seq', 'notes_heading_seq', 'notes_content_type', 'notes_report_id'], 'integer'],
            [['notes_heading', 'notes_content'], 'safe'],
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
        $query = EmrNotesDetail::find();

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
            'notes_id' => $this->notes_id,
            'seq' => $this->seq,
            'notes_heading_seq' => $this->notes_heading_seq,
            'notes_content_type' => $this->notes_content_type,
            'notes_report_id' => $this->notes_report_id,
        ]);

        $query->andFilterWhere(['like', 'notes_heading', $this->notes_heading])
            ->andFilterWhere(['like', 'notes_content', $this->notes_content]);

        return $dataProvider;
    }
}
