<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informasi_phone_xt".
 *
 * @property int $informasi_id
 * @property int $seq
 * @property int|null $reg_id
 * @property string|null $catatan
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property InformasiNotesExtDet $informasi
 * @property InformasiNotesExtDet $reg
 */
class InformasiPhoneXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi_phone_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_id', 'seq'], 'required'],
            [['informasi_id', 'seq', 'reg_id', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['catatan'], 'string', 'max' => 50],
            [['informasi_id', 'seq'], 'unique', 'targetAttribute' => ['informasi_id', 'seq']],
            [['informasi_id'], 'exist', 'skipOnError' => true, 'targetClass' => InformasiNotesExtDet::className(), 'targetAttribute' => ['informasi_id' => 'informasi_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => InformasiNotesExtDet::className(), 'targetAttribute' => ['reg_id' => 'reg_id']],
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
            'catatan' => 'Catatan',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Informasi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformasi()
    {
        return $this->hasOne(InformasiNotesExtDet::className(), ['informasi_id' => 'informasi_id']);
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(InformasiNotesExtDet::className(), ['reg_id' => 'reg_id']);
    }
}
