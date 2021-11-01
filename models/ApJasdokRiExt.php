<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_jasdok_ri_ext".
 *
 * @property string|null $reg_date
 * @property string|null $patient_name
 * @property string|null $medrec_no
 * @property string|null $staff_name
 * @property string|null $diagnosa
 * @property string|null $tindakan
 * @property float|null $jasa_tindakan
 * @property int|null $jumlah_visite
 * @property float|null $jasa_visite
 * @property float|null $total_jasa_visite
 * @property float|null $Jumlah_jasa_dokter
 * @property float|null $share_dokter
 * @property string|null $keterangan
 * @property string|null $date_import
 * @property int|null $created_user_id
 */
class ApJasdokRiExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_jasdok_ri_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_date', 'date_import'], 'safe'],
            [['jasa_tindakan', 'jasa_visite', 'total_jasa_visite', 'Jumlah_jasa_dokter', 'share_dokter'], 'number'],
            [['jumlah_visite', 'created_user_id'], 'integer'],
            [['patient_name', 'staff_name', 'keterangan'], 'string', 'max' => 50],
            [['medrec_no', 'diagnosa', 'tindakan'], 'string', 'max' => 70],
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
            'diagnosa' => 'Diagnosa',
            'tindakan' => 'Tindakan',
            'jasa_tindakan' => 'Jasa Tindakan',
            'jumlah_visite' => 'Jumlah Visite',
            'jasa_visite' => 'Jasa Visite',
            'total_jasa_visite' => 'Total Jasa Visite',
            'Jumlah_jasa_dokter' => 'Jumlah Jasa Dokter',
            'share_dokter' => 'Share Dokter',
            'keterangan' => 'Keterangan',
            'date_import' => 'Date Import',
            'created_user_id' => 'Created User ID',
        ];
    }
}
