<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spesialisasi_op_ext".
 *
 * @property int $spes_id
 * @property string|null $spes_name
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property RegOpExt[] $regOpExts
 */
class SpesialisasiOpExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spesialisasi_op_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['spes_id'], 'required'],
            [['spes_id', 'disabled', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['spes_name'], 'string', 'max' => 50],
            [['spes_name'], 'unique'],
            [['spes_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'spes_id' => 'Spes ID',
            'spes_name' => 'Spes Name',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[RegOpExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegOpExts()
    {
        return $this->hasMany(RegOpExt::className(), ['spes_id' => 'spes_id']);
    }
}
