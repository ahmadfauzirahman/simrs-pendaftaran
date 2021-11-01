<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScrtPolicyMod;

/**
 * ScrtPolicyModSearch represents the model behind the search form of `app\models\ScrtPolicyMod`.
 */
class ScrtPolicyModSearch extends ScrtPolicyMod
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'mod_id'], 'integer'],
            [['standard_actions', 'add_actions'], 'safe'],
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
        $query = ScrtPolicyMod::find();

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
            'policy_id' => $this->policy_id,
            'mod_id' => $this->mod_id,
        ]);

        $query->andFilterWhere(['like', 'standard_actions', $this->standard_actions])
            ->andFilterWhere(['like', 'add_actions', $this->add_actions]);

        return $dataProvider;
    }
}
