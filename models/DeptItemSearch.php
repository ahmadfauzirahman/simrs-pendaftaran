<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DeptItem;

/**
 * DeptItemSearch represents the model behind the search form of `app\models\DeptItem`.
 */
class DeptItemSearch extends DeptItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dept_id', 'unit_id', 'sub_unit_id', 'item_id', 'compulsory', 'compul_event', 'auto_charge', 'auto_charge_type', 'created_user_id', 'modified_user_id', 'sales_disc_gl_acc_id', 'sales_ret_gl_acc_id', 'inventory_gl_acc_id', 'sales_gl_acc_id', 'cogs_gl_acc_id'], 'integer'],
            [['description', 'created_time', 'modified_time'], 'safe'],
            [['price', 'discount', 'compul_qty'], 'number'],
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
        $query = DeptItem::find();

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
            'id' => $this->id,
            'dept_id' => $this->dept_id,
            'unit_id' => $this->unit_id,
            'sub_unit_id' => $this->sub_unit_id,
            'item_id' => $this->item_id,
            'price' => $this->price,
            'discount' => $this->discount,
            'compulsory' => $this->compulsory,
            'compul_qty' => $this->compul_qty,
            'compul_event' => $this->compul_event,
            'auto_charge' => $this->auto_charge,
            'auto_charge_type' => $this->auto_charge_type,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'sales_disc_gl_acc_id' => $this->sales_disc_gl_acc_id,
            'sales_ret_gl_acc_id' => $this->sales_ret_gl_acc_id,
            'inventory_gl_acc_id' => $this->inventory_gl_acc_id,
            'sales_gl_acc_id' => $this->sales_gl_acc_id,
            'cogs_gl_acc_id' => $this->cogs_gl_acc_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
