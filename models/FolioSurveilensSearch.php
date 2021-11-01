<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioSurveilens;

/**
 * FolioSurveilensSearch represents the model behind the search form of `app\models\FolioSurveilens`.
 */
class FolioSurveilensSearch extends FolioSurveilens
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tindakan_id', 'registration_id'], 'integer'],
            [['diagnosaMasuk', 'jenisTindakan', 'lokasi', 'tanggalPasang', 'tanggalCabut', 'totalHari', 'tanggalInfeksi', 'catatan', 'diagnosa', 'tanggalOperasi1', 'lamaOperasi1', 'tanggalOperasi2', 'lamaOperasi2', 'jenisOperasi', 'tindakanOperasi', 'asaScore', 'ido', 'idoHari', 'idoKultur', 'isk', 'iskHari', 'iskKultur', 'pneumonia', 'pneumoniaHari', 'pneumoniaKultur', 'iadp', 'iadpHari', 'iadpKultur', 'lain', 'lainHari', 'lainKultur', 'dosis1', 'jmlDosis1', 'tglMulaiDosis1', 'tglSelsaiDosis1', 'dosis2', 'jmlDosis2', 'tglMulaiDosis2', 'tglSelsaiDosis2', 'dosis3', 'jmlDosis3', 'tglMulaiDosis3', 'tglSelsaiDosis3', 'dosis4', 'jmlDosis4', 'tglMulaiDosis4', 'tglSelsaiDosis4', 'waktuPemberian', 'tglPasienKeluar', 'pindahRs', 'diagnosaTerakhir', 'faktorPenyakit', 'radiologi', 'labor'], 'safe'],
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
        $query = FolioSurveilens::find();

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
            'tindakan_id' => $this->tindakan_id,
            'registration_id' => $this->registration_id,
            'tanggalPasang' => $this->tanggalPasang,
            'tanggalCabut' => $this->tanggalCabut,
            'tanggalInfeksi' => $this->tanggalInfeksi,
            'tanggalOperasi1' => $this->tanggalOperasi1,
            'tanggalOperasi2' => $this->tanggalOperasi2,
            'tglMulaiDosis1' => $this->tglMulaiDosis1,
            'tglSelsaiDosis1' => $this->tglSelsaiDosis1,
            'tglMulaiDosis2' => $this->tglMulaiDosis2,
            'tglSelsaiDosis2' => $this->tglSelsaiDosis2,
            'tglMulaiDosis3' => $this->tglMulaiDosis3,
            'tglSelsaiDosis3' => $this->tglSelsaiDosis3,
            'tglMulaiDosis4' => $this->tglMulaiDosis4,
            'tglSelsaiDosis4' => $this->tglSelsaiDosis4,
            'waktuPemberian' => $this->waktuPemberian,
            'tglPasienKeluar' => $this->tglPasienKeluar,
        ]);

        $query->andFilterWhere(['like', 'diagnosaMasuk', $this->diagnosaMasuk])
            ->andFilterWhere(['like', 'jenisTindakan', $this->jenisTindakan])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'totalHari', $this->totalHari])
            ->andFilterWhere(['like', 'catatan', $this->catatan])
            ->andFilterWhere(['like', 'diagnosa', $this->diagnosa])
            ->andFilterWhere(['like', 'lamaOperasi1', $this->lamaOperasi1])
            ->andFilterWhere(['like', 'lamaOperasi2', $this->lamaOperasi2])
            ->andFilterWhere(['like', 'jenisOperasi', $this->jenisOperasi])
            ->andFilterWhere(['like', 'tindakanOperasi', $this->tindakanOperasi])
            ->andFilterWhere(['like', 'asaScore', $this->asaScore])
            ->andFilterWhere(['like', 'ido', $this->ido])
            ->andFilterWhere(['like', 'idoHari', $this->idoHari])
            ->andFilterWhere(['like', 'idoKultur', $this->idoKultur])
            ->andFilterWhere(['like', 'isk', $this->isk])
            ->andFilterWhere(['like', 'iskHari', $this->iskHari])
            ->andFilterWhere(['like', 'iskKultur', $this->iskKultur])
            ->andFilterWhere(['like', 'pneumonia', $this->pneumonia])
            ->andFilterWhere(['like', 'pneumoniaHari', $this->pneumoniaHari])
            ->andFilterWhere(['like', 'pneumoniaKultur', $this->pneumoniaKultur])
            ->andFilterWhere(['like', 'iadp', $this->iadp])
            ->andFilterWhere(['like', 'iadpHari', $this->iadpHari])
            ->andFilterWhere(['like', 'iadpKultur', $this->iadpKultur])
            ->andFilterWhere(['like', 'lain', $this->lain])
            ->andFilterWhere(['like', 'lainHari', $this->lainHari])
            ->andFilterWhere(['like', 'lainKultur', $this->lainKultur])
            ->andFilterWhere(['like', 'dosis1', $this->dosis1])
            ->andFilterWhere(['like', 'jmlDosis1', $this->jmlDosis1])
            ->andFilterWhere(['like', 'dosis2', $this->dosis2])
            ->andFilterWhere(['like', 'jmlDosis2', $this->jmlDosis2])
            ->andFilterWhere(['like', 'dosis3', $this->dosis3])
            ->andFilterWhere(['like', 'jmlDosis3', $this->jmlDosis3])
            ->andFilterWhere(['like', 'dosis4', $this->dosis4])
            ->andFilterWhere(['like', 'jmlDosis4', $this->jmlDosis4])
            ->andFilterWhere(['like', 'pindahRs', $this->pindahRs])
            ->andFilterWhere(['like', 'diagnosaTerakhir', $this->diagnosaTerakhir])
            ->andFilterWhere(['like', 'faktorPenyakit', $this->faktorPenyakit])
            ->andFilterWhere(['like', 'radiologi', $this->radiologi])
            ->andFilterWhere(['like', 'labor', $this->labor]);

        return $dataProvider;
    }
}
