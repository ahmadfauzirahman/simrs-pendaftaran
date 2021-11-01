<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_icf_xt".
 *
 * @property int $icf_id
 * @property string|null $description
 *
 * @property OkupasiIcfokupXt[] $okupasiIcfokupXts
 */
class OkupasiIcfXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_icf_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string', 'max' => 151],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'icf_id' => 'Icf ID',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[OkupasiIcfokupXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiIcfokupXts()
    {
        return $this->hasMany(OkupasiIcfokupXt::className(), ['icf_id' => 'icf_id']);
    }
}
