<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScrtUser;

/**
 * ScrtUserSearch represents the model behind the search form of `app\models\ScrtUser`.
 */
class ScrtUserSearch extends ScrtUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'disable_change_pwd', 'change_pwd_on_login', 'access_expiry_option', 'group_id', 'policy_id', 'active', 'built_in', 'q_server_id', 'login_show_alerts', 'opening_module_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['user_name', 'password', 'full_name', 'access_expiry_date', 'notes', 'job_title', 'department', 'email', 'user_signature', 'created_time', 'modified_time'], 'safe'],
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
        $query = ScrtUser::find();

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
            'user_id' => $this->user_id,
            'disable_change_pwd' => $this->disable_change_pwd,
            'change_pwd_on_login' => $this->change_pwd_on_login,
            'access_expiry_option' => $this->access_expiry_option,
            'access_expiry_date' => $this->access_expiry_date,
            'group_id' => $this->group_id,
            'policy_id' => $this->policy_id,
            'active' => $this->active,
            'built_in' => $this->built_in,
            'q_server_id' => $this->q_server_id,
            'login_show_alerts' => $this->login_show_alerts,
            'opening_module_id' => $this->opening_module_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'job_title', $this->job_title])
            ->andFilterWhere(['like', 'department', $this->department])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'user_signature', $this->user_signature]);

        return $dataProvider;
    }
}
