<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_bpjs_rj_ext".
 *
 * @property string|null $bpjs_sep_no
 * @property string|null $reg_date
 * @property string|null $reg_end_date
 * @property string|null $medrec_no
 * @property string|null $patient_name
 * @property float|null $total_tarif
 * @property float|null $tarif_rs
 * @property float|null $disetujui
 * @property string|null $keterangan
 * @property string|null $date_import
 * @property int|null $created_user_id
 */
class ArBpjsRjExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_bpjs_rj_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_date', 'reg_end_date', 'date_import'], 'safe'],
            [['total_tarif', 'tarif_rs', 'disetujui'], 'number'],
            [['created_user_id'], 'integer'],
            [['bpjs_sep_no'], 'string', 'max' => 25],
            [['medrec_no', 'keterangan'], 'string', 'max' => 20],
            [['patient_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bpjs_sep_no' => 'Bpjs Sep No',
            'reg_date' => 'Reg Date',
            'reg_end_date' => 'Reg End Date',
            'medrec_no' => 'Medrec No',
            'patient_name' => 'Patient Name',
            'total_tarif' => 'Total Tarif',
            'tarif_rs' => 'Tarif Rs',
            'disetujui' => 'Disetujui',
            'keterangan' => 'Keterangan',
            'date_import' => 'Date Import',
            'created_user_id' => 'Created User ID',
        ];
    }
}
