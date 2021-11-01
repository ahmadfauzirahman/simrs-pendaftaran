<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VisualSetting;

/**
 * VisualSettingSearch represents the model behind the search form of `app\models\VisualSetting`.
 */
class VisualSettingSearch extends VisualSetting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'wallpaper_id', 'wp_position', 'wp_random', 'bk_color'], 'integer'],
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
        $query = VisualSetting::find();

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
            'company_id' => $this->company_id,
            'wallpaper_id' => $this->wallpaper_id,
            'wp_position' => $this->wp_position,
            'wp_random' => $this->wp_random,
            'bk_color' => $this->bk_color,
        ]);

        return $dataProvider;
    }
}
