<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_id".
 *
 * @property string $cons_id
 * @property string $secret_key
 * @property string|null $kode_ppk
 * @property string|null $nama_ppk
 * @property string|null $vclaim_base_url
 * @property string|null $vlcaim_service_name
 * @property string|null $aplicares_base_url
 * @property string|null $aplicares_service_name
 * @property string|null $encryption_key
 * @property string|null $coder_nik
 * @property string|null $hospital_code
 */
class BpjsId extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_id';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cons_id', 'secret_key'], 'required'],
            [['cons_id'], 'string', 'max' => 8],
            [['secret_key'], 'string', 'max' => 12],
            [['kode_ppk'], 'string', 'max' => 10],
            [['nama_ppk', 'vlcaim_service_name', 'aplicares_service_name'], 'string', 'max' => 50],
            [['vclaim_base_url', 'aplicares_base_url'], 'string', 'max' => 100],
            [['encryption_key'], 'string', 'max' => 64],
            [['coder_nik'], 'string', 'max' => 16],
            [['hospital_code'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cons_id' => 'Cons ID',
            'secret_key' => 'Secret Key',
            'kode_ppk' => 'Kode Ppk',
            'nama_ppk' => 'Nama Ppk',
            'vclaim_base_url' => 'Vclaim Base Url',
            'vlcaim_service_name' => 'Vlcaim Service Name',
            'aplicares_base_url' => 'Aplicares Base Url',
            'aplicares_service_name' => 'Aplicares Service Name',
            'encryption_key' => 'Encryption Key',
            'coder_nik' => 'Coder Nik',
            'hospital_code' => 'Hospital Code',
        ];
    }
}
