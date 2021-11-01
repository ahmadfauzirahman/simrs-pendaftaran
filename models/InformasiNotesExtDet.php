<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informasi_notes_ext_det".
 *
 * @property int $informasi_id
 * @property int $seq
 * @property int|null $reg_id
 * @property string|null $notes
 * @property string|null $catatan
 * @property int|null $posted
 *
 * @property InformasiNotesExt $informasi
 * @property Registration $reg
 * @property InformasiPhoneXt[] $informasiPhoneXts
 * @property InformasiPhoneXt[] $informasiPhoneXts0
 */
class InformasiNotesExtDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi_notes_ext_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_id', 'seq'], 'required'],
            [['informasi_id', 'seq', 'reg_id', 'posted'], 'integer'],
            [['notes'], 'string'],
            [['catatan'], 'string', 'max' => 50],
            [['informasi_id', 'seq'], 'unique', 'targetAttribute' => ['informasi_id', 'seq']],
            [['informasi_id'], 'exist', 'skipOnError' => true, 'targetClass' => InformasiNotesExt::className(), 'targetAttribute' => ['informasi_id' => 'informasi_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'informasi_id' => 'Informasi ID',
            'seq' => 'Seq',
            'reg_id' => 'Reg ID',
            'notes' => 'Notes',
            'catatan' => 'Catatan',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[Informasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformasi()
    {
        return $this->hasOne(InformasiNotesExt::className(), ['informasi_id' => 'informasi_id']);
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }

    /**
     * Gets query for [[InformasiPhoneXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformasiPhoneXts()
    {
        return $this->hasMany(InformasiPhoneXt::className(), ['informasi_id' => 'informasi_id']);
    }

    /**
     * Gets query for [[InformasiPhoneXts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformasiPhoneXts0()
    {
        return $this->hasMany(InformasiPhoneXt::className(), ['reg_id' => 'reg_id']);
    }
}
