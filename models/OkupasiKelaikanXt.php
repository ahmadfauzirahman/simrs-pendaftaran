<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_kelaikan_xt".
 *
 * @property int $status_id
 * @property string|null $status_name
 *
 * @property OkupasiXt[] $okupasiXts
 */
class OkupasiKelaikanXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_kelaikan_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status_name' => 'Status Name',
        ];
    }

    /**
     * Gets query for [[OkupasiXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiXts()
    {
        return $this->hasMany(OkupasiXt::className(), ['status_kelaikan' => 'status_id']);
    }
}
