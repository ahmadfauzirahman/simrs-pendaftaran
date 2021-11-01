<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_icfokup_xt".
 *
 * @property int $okup_id
 * @property int $seq
 * @property int|null $icf_id
 *
 * @property OkupasiXt $okup
 * @property OkupasiIcfXt $icf
 */
class OkupasiIcfokupXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_icfokup_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq'], 'required'],
            [['okup_id', 'seq', 'icf_id'], 'integer'],
            [['okup_id', 'seq'], 'unique', 'targetAttribute' => ['okup_id', 'seq']],
            [['okup_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiXt::className(), 'targetAttribute' => ['okup_id' => 'okup_id']],
            [['icf_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiIcfXt::className(), 'targetAttribute' => ['icf_id' => 'icf_id']],
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
            'icf_id' => 'Icf ID',
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
     * Gets query for [[Icf]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcf()
    {
        return $this->hasOne(OkupasiIcfXt::className(), ['icf_id' => 'icf_id']);
    }
}
