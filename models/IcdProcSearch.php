<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IcdProc;

/**
 * IcdProcSearch represents the model behind the search form of `app\models\IcdProc`.
 */
class IcdProcSearch extends IcdProc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_id', 'parent_icd_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['icd_code', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = IcdProc::find();

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
            'icd_id' => $this->icd_id,
            'parent_icd_id' => $this->parent_icd_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'icd_code', $this->icd_code])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
