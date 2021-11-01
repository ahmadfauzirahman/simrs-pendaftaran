<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_jasdok_rj_ext".
 *
 * @property string|null $reg_date
 * @property string|null $patient_name
 * @property string|null $medrec_no
 * @property string|null $staff_name
 * @property string|null $konsul
 * @property string|null $tindakan
 * @property float|null $jasa_konsul
 * @property float|null $jasa_tindakan
 * @property float|null $total_jasa_dokter
 * @property float|null $share_dokter
 * @property string|null $keterangan
 * @property string|null $date_import
 * @property int|null $created_user_id
 */
class ApJasdokRjExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_jasdok_rj_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_date', 'date_import'], 'safe'],
            [['jasa_konsul', 'jasa_tindakan', 'total_jasa_dokter', 'share_dokter'], 'number'],
            [['created_user_id'], 'integer'],
            [['patient_name', 'staff_name', 'tindakan', 'keterangan'], 'string', 'max' => 50],
            [['medrec_no'], 'string', 'max' => 70],
            [['konsul'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_date' => 'Reg Date',
            'patient_name' => 'Patient Name',
            'medrec_no' => 'Medrec No',
            'staff_name' => 'Staff Name',
            'konsul' => 'Konsul',
            'tindakan' => 'Tindakan',
            'jasa_konsul' => 'Jasa Konsul',
            'jasa_tindakan' => 'Jasa Tindakan',
            'total_jasa_dokter' => 'Total Jasa Dokter',
            'share_dokter' => 'Share Dokter',
            'keterangan' => 'Keterangan',
            'date_import' => 'Date Import',
            'created_user_id' => 'Created User ID',
        ];
    }
}
