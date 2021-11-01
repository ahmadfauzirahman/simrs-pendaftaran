<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Asset;

/**
 * AssetSearch represents the model behind the search form of `app\models\Asset`.
 */
class AssetSearch extends Asset
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id', 'asset_type_id', 'tax_valuation', 'life_time', 'asset_gl_acc_id', 'dep_gl_acc_id', 'accdep_gl_acc_id', 'disposal_gl_acc_id', 'sales_gl_acc_id', 'dep_method', 'asset_status', 'num_of_jvs', 'num_of_posted_jvs', 'location_id', 'asset_group_id', 'dept_id', 'mnt_period', 'created_user_id', 'modified_user_id'], 'integer'],
            [['asset_no', 'asset_name', 'tag_id', 'acquisition_date', 'usage_date', 'disposal_date', 'selling_date', 'life_time_unit', 'model', 'model_name', 'manufacturer', 'mfg_model', 'mfg_date', 'serial_no', 'color', 'marking', 'warranty_date', 'last_mnt_date', 'picture', 'remark', 'policy_no', 'ins_date', 'ins_company', 'ins_address', 'ins_city', 'ins_term', 'ins_validity_from', 'ins_validity_to', 'user_name', 'user_title', 'person_in_charge', 'maintenanced_by', 'notes', 'created_time', 'modified_time'], 'safe'],
            [['rate', 'asset_value', 'dep_value', 'salvage_value', 'ins_value'], 'number'],
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
        $query = Asset::find();

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
            'asset_id' => $this->asset_id,
            'asset_type_id' => $this->asset_type_id,
            'tax_valuation' => $this->tax_valuation,
            'acquisition_date' => $this->acquisition_date,
            'usage_date' => $this->usage_date,
            'disposal_date' => $this->disposal_date,
            'selling_date' => $this->selling_date,
            'life_time' => $this->life_time,
            'asset_gl_acc_id' => $this->asset_gl_acc_id,
            'dep_gl_acc_id' => $this->dep_gl_acc_id,
            'accdep_gl_acc_id' => $this->accdep_gl_acc_id,
            'disposal_gl_acc_id' => $this->disposal_gl_acc_id,
            'sales_gl_acc_id' => $this->sales_gl_acc_id,
            'dep_method' => $this->dep_method,
            'rate' => $this->rate,
            'asset_status' => $this->asset_status,
            'asset_value' => $this->asset_value,
            'dep_value' => $this->dep_value,
            'salvage_value' => $this->salvage_value,
            'num_of_jvs' => $this->num_of_jvs,
            'num_of_posted_jvs' => $this->num_of_posted_jvs,
            'location_id' => $this->location_id,
            'asset_group_id' => $this->asset_group_id,
            'dept_id' => $this->dept_id,
            'mfg_date' => $this->mfg_date,
            'warranty_date' => $this->warranty_date,
            'last_mnt_date' => $this->last_mnt_date,
            'mnt_period' => $this->mnt_period,
            'ins_date' => $this->ins_date,
            'ins_value' => $this->ins_value,
            'ins_validity_from' => $this->ins_validity_from,
            'ins_validity_to' => $this->ins_validity_to,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'asset_no', $this->asset_no])
            ->andFilterWhere(['like', 'asset_name', $this->asset_name])
            ->andFilterWhere(['like', 'tag_id', $this->tag_id])
            ->andFilterWhere(['like', 'life_time_unit', $this->life_time_unit])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'model_name', $this->model_name])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'mfg_model', $this->mfg_model])
            ->andFilterWhere(['like', 'serial_no', $this->serial_no])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'marking', $this->marking])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'policy_no', $this->policy_no])
            ->andFilterWhere(['like', 'ins_company', $this->ins_company])
            ->andFilterWhere(['like', 'ins_address', $this->ins_address])
            ->andFilterWhere(['like', 'ins_city', $this->ins_city])
            ->andFilterWhere(['like', 'ins_term', $this->ins_term])
            ->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'user_title', $this->user_title])
            ->andFilterWhere(['like', 'person_in_charge', $this->person_in_charge])
            ->andFilterWhere(['like', 'maintenanced_by', $this->maintenanced_by])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
