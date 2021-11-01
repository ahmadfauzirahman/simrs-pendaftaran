<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Alerts;

/**
 * AlertsSearch represents the model behind the search form of `app\models\Alerts`.
 */
class AlertsSearch extends Alerts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alert_id', 'report_id', 'detail_alert_field_no', 'alert_auto_width', 'detail_alert_auto_width', 'show_in_detail', 'show_params'], 'integer'],
            [['alert_name', 'alert_table', 'detail_alert_table', 'detail_alert_field_name', 'alert_description'], 'safe'],
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
        $query = Alerts::find();

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
            'alert_id' => $this->alert_id,
            'report_id' => $this->report_id,
            'detail_alert_field_no' => $this->detail_alert_field_no,
            'alert_auto_width' => $this->alert_auto_width,
            'detail_alert_auto_width' => $this->detail_alert_auto_width,
            'show_in_detail' => $this->show_in_detail,
            'show_params' => $this->show_params,
        ]);

        $query->andFilterWhere(['like', 'alert_name', $this->alert_name])
            ->andFilterWhere(['like', 'alert_table', $this->alert_table])
            ->andFilterWhere(['like', 'detail_alert_table', $this->detail_alert_table])
            ->andFilterWhere(['like', 'detail_alert_field_name', $this->detail_alert_field_name])
            ->andFilterWhere(['like', 'alert_description', $this->alert_description]);

        return $dataProvider;
    }
}
