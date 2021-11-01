<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rl_dtd_external".
 *
 * @property int $no_urut
 * @property string|null $no_dtd
 * @property string|null $no_rinci
 * @property string|null $nama_dtd
 */
class RlDtdExternal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rl_dtd_external';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut'], 'required'],
            [['no_urut'], 'integer'],
            [['no_dtd'], 'string', 'max' => 10],
            [['no_rinci'], 'string', 'max' => 50],
            [['nama_dtd'], 'string', 'max' => 100],
            [['no_urut'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_urut' => 'No Urut',
            'no_dtd' => 'No Dtd',
            'no_rinci' => 'No Rinci',
            'nama_dtd' => 'Nama Dtd',
        ];
    }
}
