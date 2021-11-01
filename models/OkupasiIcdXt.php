<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_icd_xt".
 *
 * @property int $okup_id
 * @property int $seq
 * @property int|null $icd_id
 *
 * @property OkupasiXt $okup
 * @property Icd $icd
 */
class OkupasiIcdXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_icd_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq'], 'required'],
            [['okup_id', 'seq', 'icd_id'], 'integer'],
            [['okup_id', 'seq'], 'unique', 'targetAttribute' => ['okup_id', 'seq']],
            [['okup_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiXt::className(), 'targetAttribute' => ['okup_id' => 'okup_id']],
            [['icd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Icd::className(), 'targetAttribute' => ['icd_id' => 'icd_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'okup_id' => 'Okup ID',
            'seq' => 'Seq',
            'icd_id' => 'Icd ID',
        ];
    }

    /**
     * Gets query for [[Okup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkup()
    {
        return $this->hasOne(OkupasiXt::className(), ['okup_id' => 'okup_id']);
    }

    /**
     * Gets query for [[Icd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcd()
    {
        return $this->hasOne(Icd::className(), ['icd_id' => 'icd_id']);
    }
}
