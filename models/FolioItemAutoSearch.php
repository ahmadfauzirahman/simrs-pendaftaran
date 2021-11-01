<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioItemAuto;

/**
 * FolioItemAutoSearch represents the model behind the search form of `app\models\FolioItemAuto`.
 */
class FolioItemAutoSearch extends FolioItemAuto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'item_id', 'num_applied', 'num_to_apply', 'created_user_id', 'modified_user_id'], 'integer'],
            [['quantity', 'unit_price', 'uom_conversion', 'disc_pc', 'disc_amount', 'self_amount', 'pay_by_amount', 'tax1_amount', 'tax2_amount'], 'number'],
            [['uom', 'remark', 'last_applied', 'next_expected', 'created_time', 'modified_time'], 'safe'],
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
        $query = FolioItemAuto::find();

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
            'uom_conversion' => $this->uom_conversion,
            'disc_pc' => $this->disc_pc,
            'disc_amount' => $this->disc_amount,
            'self_amount' => $this->self_amount,
            'pay_by_amount' => $this->pay_by_amount,
            'tax1_amount' => $this->tax1_amount,
            'tax2_amount' => $this->tax2_amount,
            'last_applied' => $this->last_applied,
            'next_expected' => $this->next_expected,
            'num_applied' => $this->num_applied,
            'num_to_apply' => $this->num_to_apply,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
