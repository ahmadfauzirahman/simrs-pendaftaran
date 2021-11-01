<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioItem;

/**
 * FolioItemSearch represents the model behind the search form of `app\models\FolioItem`.
 */
class FolioItemSearch extends FolioItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'item_id', 'compulsory', 'posted', 'created_user_id', 'modified_user_id', 'staff_id'], 'integer'],
            [['quantity', 'unit_price', 'disc_pc', 'disc_amount', 'self_amount', 'pay_by_amount', 'uom_conversion', 'tax1_amount', 'tax2_amount', 'add_discount'], 'number'],
            [['remark', 'other_remark', 'uom', 'created_time', 'modified_time', 'dosage'], 'safe'],
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
        $query = FolioItem::find();

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
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price,
            'disc_pc' => $this->disc_pc,
            'disc_amount' => $this->disc_amount,
            'self_amount' => $this->self_amount,
            'pay_by_amount' => $this->pay_by_amount,
            'compulsory' => $this->compulsory,
            'uom_conversion' => $this->uom_conversion,
            'tax1_amount' => $this->tax1_amount,
            'tax2_amount' => $this->tax2_amount,
            'posted' => $this->posted,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'add_discount' => $this->add_discount,
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'other_remark', $this->other_remark])
            ->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'dosage', $this->dosage]);

        return $dataProvider;
    }
}
