<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_alat_xt".
 *
 * @property int $okup_id
 * @property int $seq
 * @property string|null $alat
 *
 * @property OkupasiXt $okup
 */
class OkupasiAlatXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_alat_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq'], 'required'],
            [['okup_id', 'seq'], 'integer'],
            [['alat'], 'string', 'max' => 100],
            [['okup_id', 'seq'], 'unique', 'targetAttribute' => ['okup_id', 'seq']],
            [['okup_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiXt::className(), 'targetAttribute' => ['okup_id' => 'okup_id']],
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
            'alat' => 'Alat',
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
}
