<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioDoc;

/**
 * FolioDocSearch represents the model behind the search form of `app\models\FolioDoc`.
 */
class FolioDocSearch extends FolioDoc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'doc_id', 'posted', 'created_user_id', 'modified_user_id', 'validated_user_id', 'deleted_user_id'], 'integer'],
            [['file_name', 'attachment', 'created_time', 'modified_time', 'validated_time', 'deleted_time'], 'safe'],
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
        $query = FolioDoc::find();

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
            'doc_id' => $this->doc_id,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'validated_user_id' => $this->validated_user_id,
            'validated_time' => $this->validated_time,
            'deleted_user_id' => $this->deleted_user_id,
            'deleted_time' => $this->deleted_time,
        ]);

        $query->andFilterWhere(['like', 'file_name', $this->file_name])
            ->andFilterWhere(['like', 'attachment', $this->attachment]);

        return $dataProvider;
    }
}
