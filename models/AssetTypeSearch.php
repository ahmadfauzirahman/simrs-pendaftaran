<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssetType;

/**
 * AssetTypeSearch represents the model behind the search form of `app\models\AssetType`.
 */
class AssetTypeSearch extends AssetType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_type_id', 'asset_char', 'asset_gl_acc_id', 'dep_gl_acc_id', 'accdep_gl_acc_id', 'disposal_gl_acc_id', 'sales_gl_acc_id', 'dep_method', 'lite_time', 'created_user_id', 'modified_user_id'], 'integer'],
            [['type_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = AssetType::find();

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
            'asset_type_id' => $this->asset_type_id,
            'asset_char' => $this->asset_char,
            'asset_gl_acc_id' => $this->asset_gl_acc_id,
            'dep_gl_acc_id' => $this->dep_gl_acc_id,
            'accdep_gl_acc_id' => $this->accdep_gl_acc_id,
            'disposal_gl_acc_id' => $this->disposal_gl_acc_id,
            'sales_gl_acc_id' => $this->sales_gl_acc_id,
            'dep_method' => $this->dep_method,
            'lite_time' => $this->lite_time,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'type_name', $this->type_name]);

        return $dataProvider;
    }
}
