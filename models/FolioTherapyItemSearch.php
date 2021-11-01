<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioTherapyItem;

/**
 * FolioTherapyItemSearch represents the model behind the search form of `app\models\FolioTherapyItem`.
 */
class FolioTherapyItemSearch extends FolioTherapyItem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'item_id', 'dtd', 'iter', 'posted', 'posted_sent', 'deleted_sent', 'created_user_id', 'modified_user_id', 'deleted_user_id', 'validated_by', 'deleted_by'], 'integer'],
            [['quantity', 'age_weight', 'total_qty', 'uom_conversion'], 'number'],
            [['uom', 'remark', 'dosage', 'other_remark', 'created_time', 'modified_time', 'deleted_time', 'validated_time'], 'safe'],
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
        $query = FolioTherapyItem::find();

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
            'age_weight' => $this->age_weight,
            'total_qty' => $this->total_qty,
            'dtd' => $this->dtd,
            'uom_conversion' => $this->uom_conversion,
            'iter' => $this->iter,
            'posted' => $this->posted,
            'posted_sent' => $this->posted_sent,
            'deleted_sent' => $this->deleted_sent,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'deleted_user_id' => $this->deleted_user_id,
            'deleted_time' => $this->deleted_time,
            'validated_by' => $this->validated_by,
            'validated_time' => $this->validated_time,
            'deleted_by' => $this->deleted_by,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'dosage', $this->dosage])
            ->andFilterWhere(['like', 'other_remark', $this->other_remark]);

        return $dataProvider;
    }
}
