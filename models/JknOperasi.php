<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jkn_operasi".
 *
 * @property int $idoperasi
 * @property string|null $nomorkartu
 * @property string|null $kodebooking
 * @property string|null $tanggaloperasi
 * @property string|null $jenistindakan
 * @property string|null $kodepoli
 * @property string|null $namapoli
 * @property int|null $terlaksana
 * @property int|null $patient_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class JknOperasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jkn_operasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggaloperasi', 'created_time', 'modified_time'], 'safe'],
            [['terlaksana', 'patient_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['nomorkartu', 'kodebooking', 'kodepoli', 'namapoli'], 'string', 'max' => 255],
            [['jenistindakan'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idoperasi' => 'Idoperasi',
            'nomorkartu' => 'Nomorkartu',
            'kodebooking' => 'Kodebooking',
            'tanggaloperasi' => 'Tanggaloperasi',
            'jenistindakan' => 'Jenistindakan',
            'kodepoli' => 'Kodepoli',
            'namapoli' => 'Namapoli',
            'terlaksana' => 'Terlaksana',
            'patient_id' => 'Patient ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
