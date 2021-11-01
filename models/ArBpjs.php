<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ar_bpjs".
 *
 * @property string $bpjs_sep_no
 * @property string|null $reg_date
 * @property string|null $reg_end_date
 * @property string|null $medrec_no
 * @property string|null $patient_name
 * @property string|null $inacbg
 * @property float|null $total_tarif
 * @property float|null $tarif_rs
 * @property string|null $reg_dept
 */
class ArBpjs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ar_bpjs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bpjs_sep_no'], 'required'],
            [['reg_date', 'reg_end_date'], 'safe'],
            [['total_tarif', 'tarif_rs'], 'number'],
            [['bpjs_sep_no'], 'string', 'max' => 25],
            [['medrec_no'], 'string', 'max' => 20],
            [['patient_name'], 'string', 'max' => 50],
            [['inacbg', 'reg_dept'], 'string', 'max' => 15],
            [['bpjs_sep_no'], 'unique'],
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
            'inacbg' => 'Inacbg',
            'total_tarif' => 'Total Tarif',
            'tarif_rs' => 'Tarif Rs',
            'reg_dept' => 'Reg Dept',
        ];
    }
}
