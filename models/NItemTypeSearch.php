<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NItemType;

/**
 * NItemTypeSearch represents the model behind the search form of `app\models\NItemType`.
 */
class NItemTypeSearch extends NItemType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_type_id', 'inventory', 'costing_method', 'created_user_id', 'modified_user_id', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_id', 'cogs_gl_acc_id', 'cat', 'sales_ret_gl_acc_id'], 'integer'],
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
        $query = NItemType::find();

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
            'item_type_id' => $this->item_type_id,
            'inventory' => $this->inventory,
            'costing_method' => $this->costing_method,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'sales_gl_acc_id' => $this->sales_gl_acc_id,
            'sales_disc_gl_acc_id' => $this->sales_disc_gl_acc_id,
            'inventory_gl_acc_id' => $this->inventory_gl_acc_id,
            'cogs_gl_acc_id' => $this->cogs_gl_acc_id,
            'cat' => $this->cat,
            'sales_ret_gl_acc_id' => $this->sales_ret_gl_acc_id,
        ]);

        $query->andFilterWhere(['like', 'type_name', $this->type_name]);

        return $dataProvider;
    }
}
