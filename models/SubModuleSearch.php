<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubModule;

/**
 * SubModuleSearch represents the model behind the search form of `app\models\SubModule`.
 */
class SubModuleSearch extends SubModule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_mod_id', 'interface_id', 'dept_id', 'unit_id', 'sub_unit_id', 'mod_id', 'barcode_enabled', 'payment_type', 'bi_x', 'bi_y', 'ai_x', 'ai_y', 'be_x', 'be_y', 'ae_x', 'ae_y', 'bc_x', 'bc_y', 'ac_x', 'ac_y'], 'integer'],
            [['sub_mod_name', 'image', 'before_insert_url', 'after_insert_url', 'before_edit_url', 'after_edit_url', 'before_cancel_url', 'after_cancel_url'], 'safe'],
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
        $query = SubModule::find();

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
            'sub_mod_id' => $this->sub_mod_id,
            'interface_id' => $this->interface_id,
            'dept_id' => $this->dept_id,
            'unit_id' => $this->unit_id,
            'sub_unit_id' => $this->sub_unit_id,
            'mod_id' => $this->mod_id,
            'barcode_enabled' => $this->barcode_enabled,
            'payment_type' => $this->payment_type,
            'bi_x' => $this->bi_x,
            'bi_y' => $this->bi_y,
            'ai_x' => $this->ai_x,
            'ai_y' => $this->ai_y,
            'be_x' => $this->be_x,
            'be_y' => $this->be_y,
            'ae_x' => $this->ae_x,
            'ae_y' => $this->ae_y,
            'bc_x' => $this->bc_x,
            'bc_y' => $this->bc_y,
            'ac_x' => $this->ac_x,
            'ac_y' => $this->ac_y,
        ]);

        $query->andFilterWhere(['like', 'sub_mod_name', $this->sub_mod_name])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'before_insert_url', $this->before_insert_url])
            ->andFilterWhere(['like', 'after_insert_url', $this->after_insert_url])
            ->andFilterWhere(['like', 'before_edit_url', $this->before_edit_url])
            ->andFilterWhere(['like', 'after_edit_url', $this->after_edit_url])
            ->andFilterWhere(['like', 'before_cancel_url', $this->before_cancel_url])
            ->andFilterWhere(['like', 'after_cancel_url', $this->after_cancel_url]);

        return $dataProvider;
    }
}
