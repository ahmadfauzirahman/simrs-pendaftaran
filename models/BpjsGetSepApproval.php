<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_get_sep_approval".
 *
 * @property string $no_kartu
 * @property string $tgl_sep
 * @property int|null $jns_pelayanan
 * @property string|null $keterangan
 * @property string|null $user
 * @property int|null $status
 */
class BpjsGetSepApproval extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_get_sep_approval';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kartu', 'tgl_sep'], 'required'],
            [['tgl_sep'], 'safe'],
            [['jns_pelayanan', 'status'], 'integer'],
            [['no_kartu'], 'string', 'max' => 50],
            [['keterangan', 'user'], 'string', 'max' => 100],
            [['no_kartu', 'tgl_sep'], 'unique', 'targetAttribute' => ['no_kartu', 'tgl_sep']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_kartu' => 'No Kartu',
            'tgl_sep' => 'Tgl Sep',
            'jns_pelayanan' => 'Jns Pelayanan',
            'keterangan' => 'Keterangan',
            'user' => 'User',
            'status' => 'Status',
        ];
    }
}
