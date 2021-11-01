<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_ppk_map".
 *
 * @property string $kode_ppk
 * @property string|null $nama_ppk
 * @property string|null $jenis_ppk
 * @property string|null $kabupaten
 */
class BpjsPpkMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_ppk_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_ppk'], 'required'],
            [['kode_ppk'], 'string', 'max' => 20],
            [['nama_ppk', 'jenis_ppk', 'kabupaten'], 'string', 'max' => 100],
            [['kode_ppk'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_ppk' => 'Kode Ppk',
            'nama_ppk' => 'Nama Ppk',
            'jenis_ppk' => 'Jenis Ppk',
            'kabupaten' => 'Kabupaten',
        ];
    }
}
