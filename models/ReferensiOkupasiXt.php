<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "referensi_okupasi_xt".
 *
 * @property int $ref_id
 * @property string|null $referensi_name
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property OkupasiXt[] $okupasiXts
 */
class ReferensiOkupasiXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referensi_okupasi_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disabled', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['referensi_name'], 'string', 'max' => 50],
            [['referensi_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ref_id' => 'Ref ID',
            'referensi_name' => 'Referensi Name',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[OkupasiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiXts()
    {
        return $this->hasMany(OkupasiXt::className(), ['ref_id' => 'ref_id']);
    }
}
