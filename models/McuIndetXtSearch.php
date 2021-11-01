<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\McuIndetXt;

/**
 * McuIndetXtSearch represents the model behind the search form of `app\models\McuIndetXt`.
 */
class McuIndetXtSearch extends McuIndetXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mcu_id', 'seq', 'posted', 'cd2', 'cd3', 'cd5', 'e1', 'e2', 'e3', 'e4', 'e5', 'e6', 'e7', 'e8', 'e9', 'e10', 'e11', 'e12', 'e13', 'e14', 'e15', 'e16', 'e17', 'e18', 'e19', 'e20', 'e21', 'e22', 'e23', 'e24', 'e25', 'e26', 'e27', 'e28', 'e29', 'e30', 'created_user_id', 'modified_user_id'], 'integer'],
            [['e31', 'e32', 'e33', 'e34', 'e35', 'e36', 'e37', 'e38', 'e39', 'e40', 'e41', 'ep1', 'ep2', 'ep3', 'ep4', 'ep5', 'ep6', 'ep7', 'ep8', 'ep9', 'ep10', 'ep11', 'ep12', 'ep13', 'ep14', 'ep15', 'ep16', 'ep17', 'ep18', 'ep19', 'ep20', 'ep21', 'ep22', 'ep23', 'ep24', 'ep25', 'ep26', 'ep27', 'ep28', 'ep29', 'ep30', 'ep31', 'ep32', 'ep33', 'ep34', 'ep35', 'ep36', 'ep37', 'ep38', 'ep39', 'ep40', 'ep41', 'pe1', 'pe2', 'pe3a', 'pe3b', 'pe4', 'pe5', 'pe6', 'pe7', 'pe8', 'pe9', 'pe10', 'pe11', 'pe12', 'pe13', 'pe14', 'pe15', 'pe16', 'pe17', 'pe18', 'pe19', 'pe20', 'pe21', 'pe22', 'pe23', 'pe24', 'pe25', 'pe26', 'pe27', 'pe28', 'pe29', 'pe30', 'pe31', 'pe32', 'pe33', 'pe34', 'pe35', 'pe36', 'ape1', 'ape2', 'ape3', 'm1', 'mkesim', 'msaran', 'created_time', 'modified_time'], 'safe'],
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
        $query = McuIndetXt::find();

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
            'mcu_id' => $this->mcu_id,
            'seq' => $this->seq,
            'posted' => $this->posted,
            'cd2' => $this->cd2,
            'cd3' => $this->cd3,
            'cd5' => $this->cd5,
            'e1' => $this->e1,
            'e2' => $this->e2,
            'e3' => $this->e3,
            'e4' => $this->e4,
            'e5' => $this->e5,
            'e6' => $this->e6,
            'e7' => $this->e7,
            'e8' => $this->e8,
            'e9' => $this->e9,
            'e10' => $this->e10,
            'e11' => $this->e11,
            'e12' => $this->e12,
            'e13' => $this->e13,
            'e14' => $this->e14,
            'e15' => $this->e15,
            'e16' => $this->e16,
            'e17' => $this->e17,
            'e18' => $this->e18,
            'e19' => $this->e19,
            'e20' => $this->e20,
            'e21' => $this->e21,
            'e22' => $this->e22,
            'e23' => $this->e23,
            'e24' => $this->e24,
            'e25' => $this->e25,
            'e26' => $this->e26,
            'e27' => $this->e27,
            'e28' => $this->e28,
            'e29' => $this->e29,
            'e30' => $this->e30,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'e31', $this->e31])
            ->andFilterWhere(['like', 'e32', $this->e32])
            ->andFilterWhere(['like', 'e33', $this->e33])
            ->andFilterWhere(['like', 'e34', $this->e34])
            ->andFilterWhere(['like', 'e35', $this->e35])
            ->andFilterWhere(['like', 'e36', $this->e36])
            ->andFilterWhere(['like', 'e37', $this->e37])
            ->andFilterWhere(['like', 'e38', $this->e38])
            ->andFilterWhere(['like', 'e39', $this->e39])
            ->andFilterWhere(['like', 'e40', $this->e40])
            ->andFilterWhere(['like', 'e41', $this->e41])
            ->andFilterWhere(['like', 'ep1', $this->ep1])
            ->andFilterWhere(['like', 'ep2', $this->ep2])
            ->andFilterWhere(['like', 'ep3', $this->ep3])
            ->andFilterWhere(['like', 'ep4', $this->ep4])
            ->andFilterWhere(['like', 'ep5', $this->ep5])
            ->andFilterWhere(['like', 'ep6', $this->ep6])
            ->andFilterWhere(['like', 'ep7', $this->ep7])
            ->andFilterWhere(['like', 'ep8', $this->ep8])
            ->andFilterWhere(['like', 'ep9', $this->ep9])
            ->andFilterWhere(['like', 'ep10', $this->ep10])
            ->andFilterWhere(['like', 'ep11', $this->ep11])
            ->andFilterWhere(['like', 'ep12', $this->ep12])
            ->andFilterWhere(['like', 'ep13', $this->ep13])
            ->andFilterWhere(['like', 'ep14', $this->ep14])
            ->andFilterWhere(['like', 'ep15', $this->ep15])
            ->andFilterWhere(['like', 'ep16', $this->ep16])
            ->andFilterWhere(['like', 'ep17', $this->ep17])
            ->andFilterWhere(['like', 'ep18', $this->ep18])
            ->andFilterWhere(['like', 'ep19', $this->ep19])
            ->andFilterWhere(['like', 'ep20', $this->ep20])
            ->andFilterWhere(['like', 'ep21', $this->ep21])
            ->andFilterWhere(['like', 'ep22', $this->ep22])
            ->andFilterWhere(['like', 'ep23', $this->ep23])
            ->andFilterWhere(['like', 'ep24', $this->ep24])
            ->andFilterWhere(['like', 'ep25', $this->ep25])
            ->andFilterWhere(['like', 'ep26', $this->ep26])
            ->andFilterWhere(['like', 'ep27', $this->ep27])
            ->andFilterWhere(['like', 'ep28', $this->ep28])
            ->andFilterWhere(['like', 'ep29', $this->ep29])
            ->andFilterWhere(['like', 'ep30', $this->ep30])
            ->andFilterWhere(['like', 'ep31', $this->ep31])
            ->andFilterWhere(['like', 'ep32', $this->ep32])
            ->andFilterWhere(['like', 'ep33', $this->ep33])
            ->andFilterWhere(['like', 'ep34', $this->ep34])
            ->andFilterWhere(['like', 'ep35', $this->ep35])
            ->andFilterWhere(['like', 'ep36', $this->ep36])
            ->andFilterWhere(['like', 'ep37', $this->ep37])
            ->andFilterWhere(['like', 'ep38', $this->ep38])
            ->andFilterWhere(['like', 'ep39', $this->ep39])
            ->andFilterWhere(['like', 'ep40', $this->ep40])
            ->andFilterWhere(['like', 'ep41', $this->ep41])
            ->andFilterWhere(['like', 'pe1', $this->pe1])
            ->andFilterWhere(['like', 'pe2', $this->pe2])
            ->andFilterWhere(['like', 'pe3a', $this->pe3a])
            ->andFilterWhere(['like', 'pe3b', $this->pe3b])
            ->andFilterWhere(['like', 'pe4', $this->pe4])
            ->andFilterWhere(['like', 'pe5', $this->pe5])
            ->andFilterWhere(['like', 'pe6', $this->pe6])
            ->andFilterWhere(['like', 'pe7', $this->pe7])
            ->andFilterWhere(['like', 'pe8', $this->pe8])
            ->andFilterWhere(['like', 'pe9', $this->pe9])
            ->andFilterWhere(['like', 'pe10', $this->pe10])
            ->andFilterWhere(['like', 'pe11', $this->pe11])
            ->andFilterWhere(['like', 'pe12', $this->pe12])
            ->andFilterWhere(['like', 'pe13', $this->pe13])
            ->andFilterWhere(['like', 'pe14', $this->pe14])
            ->andFilterWhere(['like', 'pe15', $this->pe15])
            ->andFilterWhere(['like', 'pe16', $this->pe16])
            ->andFilterWhere(['like', 'pe17', $this->pe17])
            ->andFilterWhere(['like', 'pe18', $this->pe18])
            ->andFilterWhere(['like', 'pe19', $this->pe19])
            ->andFilterWhere(['like', 'pe20', $this->pe20])
            ->andFilterWhere(['like', 'pe21', $this->pe21])
            ->andFilterWhere(['like', 'pe22', $this->pe22])
            ->andFilterWhere(['like', 'pe23', $this->pe23])
            ->andFilterWhere(['like', 'pe24', $this->pe24])
            ->andFilterWhere(['like', 'pe25', $this->pe25])
            ->andFilterWhere(['like', 'pe26', $this->pe26])
            ->andFilterWhere(['like', 'pe27', $this->pe27])
            ->andFilterWhere(['like', 'pe28', $this->pe28])
            ->andFilterWhere(['like', 'pe29', $this->pe29])
            ->andFilterWhere(['like', 'pe30', $this->pe30])
            ->andFilterWhere(['like', 'pe31', $this->pe31])
            ->andFilterWhere(['like', 'pe32', $this->pe32])
            ->andFilterWhere(['like', 'pe33', $this->pe33])
            ->andFilterWhere(['like', 'pe34', $this->pe34])
            ->andFilterWhere(['like', 'pe35', $this->pe35])
            ->andFilterWhere(['like', 'pe36', $this->pe36])
            ->andFilterWhere(['like', 'ape1', $this->ape1])
            ->andFilterWhere(['like', 'ape2', $this->ape2])
            ->andFilterWhere(['like', 'ape3', $this->ape3])
            ->andFilterWhere(['like', 'm1', $this->m1])
            ->andFilterWhere(['like', 'mkesim', $this->mkesim])
            ->andFilterWhere(['like', 'msaran', $this->msaran]);

        return $dataProvider;
    }
}
