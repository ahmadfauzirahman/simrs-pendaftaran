<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemTrf;

/**
 * ItemTrfSearch represents the model behind the search form of `app\models\ItemTrf`.
 */
class ItemTrfSearch extends ItemTrf
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'item_type_id', 'item_group_id', 'uom_id', 'sales_item', 'purchase_istem', 'wip_item', 'material_per_batch', 'disabled', 'backorderable', 'col_staff_enabled', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_ida', 'cogs_gl_acc_id', 'created_user_id', 'modified_user_id', 'sales_tax1_id', 'sales_tax2_id', 'sales_tax3_id', 'purchase_tax1_id', 'purchase_tax2_id', 'purchase_tax3_id', 'price_define', 'price_value', 'sales_ret_gl_acc_id', 'pharm_formula_editabe', 'formula_price_fixed', 'formula_add_price_zero', 'item_category', 'laboratory', 'dist_sales', 'enable_auto_charge', 'ac_occurance', 'ac_limit_app', 'ac_limit_num_of_app', 'therapy', 'vendor_id', 'kategori_dokter'], 'integer'],
            [['item_no', 'item_name', 'created_time', 'modified_time', 'notes', 'lab_exam_mtd', 'ac_evaluate_time', 'manufacturer', 'formula', 'warna', 'sediaan', 'gol_ims', 'subgol_ims', 'kel_therapi', 'carapakai', 'kategori1', 'kategori2', 'kategori3', 'kategori4', 'kategori5', 'item_name_en', 'kategori1_en', 'kategori2_en', 'kategori3_en', 'kategori4_en', 'kategori5_en'], 'safe'],
            [['minimum_qty', 'safety_level', 'economic_order_qty', 'unit_weight', 'qty_per_batch', 'unit_price', 'unit_discount', 'fixed_cost', 'wgt_avg_cost', 'markup_pc', 'ac_round_to', 'ac_round_offset', 'last_purchase_price', 'last_purchase_disc_pc'], 'number'],
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
        $query = ItemTrf::find();

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
            'item_id' => $this->item_id,
            'item_type_id' => $this->item_type_id,
            'item_group_id' => $this->item_group_id,
            'uom_id' => $this->uom_id,
            'sales_item' => $this->sales_item,
            'purchase_istem' => $this->purchase_istem,
            'wip_item' => $this->wip_item,
            'minimum_qty' => $this->minimum_qty,
            'safety_level' => $this->safety_level,
            'economic_order_qty' => $this->economic_order_qty,
            'unit_weight' => $this->unit_weight,
            'qty_per_batch' => $this->qty_per_batch,
            'material_per_batch' => $this->material_per_batch,
            'disabled' => $this->disabled,
            'backorderable' => $this->backorderable,
            'unit_price' => $this->unit_price,
            'unit_discount' => $this->unit_discount,
            'fixed_cost' => $this->fixed_cost,
            'wgt_avg_cost' => $this->wgt_avg_cost,
            'col_staff_enabled' => $this->col_staff_enabled,
            'sales_gl_acc_id' => $this->sales_gl_acc_id,
            'sales_disc_gl_acc_id' => $this->sales_disc_gl_acc_id,
            'inventory_gl_acc_ida' => $this->inventory_gl_acc_ida,
            'cogs_gl_acc_id' => $this->cogs_gl_acc_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'sales_tax1_id' => $this->sales_tax1_id,
            'sales_tax2_id' => $this->sales_tax2_id,
            'sales_tax3_id' => $this->sales_tax3_id,
            'purchase_tax1_id' => $this->purchase_tax1_id,
            'purchase_tax2_id' => $this->purchase_tax2_id,
            'purchase_tax3_id' => $this->purchase_tax3_id,
            'price_define' => $this->price_define,
            'markup_pc' => $this->markup_pc,
            'price_value' => $this->price_value,
            'sales_ret_gl_acc_id' => $this->sales_ret_gl_acc_id,
            'pharm_formula_editabe' => $this->pharm_formula_editabe,
            'formula_price_fixed' => $this->formula_price_fixed,
            'formula_add_price_zero' => $this->formula_add_price_zero,
            'item_category' => $this->item_category,
            'laboratory' => $this->laboratory,
            'dist_sales' => $this->dist_sales,
            'enable_auto_charge' => $this->enable_auto_charge,
            'ac_occurance' => $this->ac_occurance,
            'ac_limit_app' => $this->ac_limit_app,
            'ac_limit_num_of_app' => $this->ac_limit_num_of_app,
            'ac_evaluate_time' => $this->ac_evaluate_time,
            'ac_round_to' => $this->ac_round_to,
            'ac_round_offset' => $this->ac_round_offset,
            'therapy' => $this->therapy,
            'vendor_id' => $this->vendor_id,
            'last_purchase_price' => $this->last_purchase_price,
            'last_purchase_disc_pc' => $this->last_purchase_disc_pc,
            'kategori_dokter' => $this->kategori_dokter,
        ]);

        $query->andFilterWhere(['like', 'item_no', $this->item_no])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lab_exam_mtd', $this->lab_exam_mtd])
            ->andFilterWhere(['like', 'manufacturer', $this->manufacturer])
            ->andFilterWhere(['like', 'formula', $this->formula])
            ->andFilterWhere(['like', 'warna', $this->warna])
            ->andFilterWhere(['like', 'sediaan', $this->sediaan])
            ->andFilterWhere(['like', 'gol_ims', $this->gol_ims])
            ->andFilterWhere(['like', 'subgol_ims', $this->subgol_ims])
            ->andFilterWhere(['like', 'kel_therapi', $this->kel_therapi])
            ->andFilterWhere(['like', 'carapakai', $this->carapakai])
            ->andFilterWhere(['like', 'kategori1', $this->kategori1])
            ->andFilterWhere(['like', 'kategori2', $this->kategori2])
            ->andFilterWhere(['like', 'kategori3', $this->kategori3])
            ->andFilterWhere(['like', 'kategori4', $this->kategori4])
            ->andFilterWhere(['like', 'kategori5', $this->kategori5])
            ->andFilterWhere(['like', 'item_name_en', $this->item_name_en])
            ->andFilterWhere(['like', 'kategori1_en', $this->kategori1_en])
            ->andFilterWhere(['like', 'kategori2_en', $this->kategori2_en])
            ->andFilterWhere(['like', 'kategori3_en', $this->kategori3_en])
            ->andFilterWhere(['like', 'kategori4_en', $this->kategori4_en])
            ->andFilterWhere(['like', 'kategori5_en', $this->kategori5_en]);

        return $dataProvider;
    }
}
