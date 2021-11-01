<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_bpjs_ri_ext".
 *
 * @property string|null $reg_date
 * @property string|null $reg_end_date
 * @property string|null $medrec_no
 * @property string|null $patient_name
 * @property string|null $bpjs_sep_no
 * @property string|null $inacbg
 * @property float|null $top_up
 * @property float|null $total_tarif
 * @property float|null $tarif_rs
 * @property float|null $disetujui
 * @property string|null $jenis
 * @property string|null $date_import
 * @property int|null $created_user_id
 */
class ArBpjsRiExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_bpjs_ri_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_date', 'reg_end_date', 'date_import'], 'safe'],
            [['top_up', 'total_tarif', 'tarif_rs', 'disetujui'], 'number'],
            [['created_user_id'], 'integer'],
            [['medrec_no'], 'string', 'max' => 20],
            [['patient_name', 'jenis'], 'string', 'max' => 50],
            [['bpjs_sep_no'], 'string', 'max' => 25],
            [['inacbg'], 'string', 'max' => 70],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_date' => 'Reg Date',
            'reg_end_date' => 'Reg End Date',
            'medrec_no' => 'Medrec No',
            'patient_name' => 'Patient Name',
            'bpjs_sep_no' => 'Bpjs Sep No',
            'inacbg' => 'Inacbg',
            'top_up' => 'Top Up',
            'total_tarif' => 'Total Tarif',
            'tarif_rs' => 'Tarif Rs',
            'disetujui' => 'Disetujui',
            'jenis' => 'Jenis',
            'date_import' => 'Date Import',
            'created_user_id' => 'Created User ID',
        ];
    }
}
