<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ResponetimeChasierExt;

/**
 * ResponetimeChasierExtSearch represents the model behind the search form of `app\models\ResponetimeChasierExt`.
 */
class ResponetimeChasierExtSearch extends ResponetimeChasierExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'user_lo', 'user_adm', 'user_close', 'modified_notes'], 'integer'],
            [['datetime_lo', 'datetime_adm', 'datetime_close', 'notes'], 'safe'],
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
        $query = ResponetimeChasierExt::find();

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
            'reg_id' => $this->reg_id,
            'datetime_lo' => $this->datetime_lo,
            'datetime_adm' => $this->datetime_adm,
            'datetime_close' => $this->datetime_close,
            'user_lo' => $this->user_lo,
            'user_adm' => $this->user_adm,
            'user_close' => $this->user_close,
            'modified_notes' => $this->modified_notes,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
