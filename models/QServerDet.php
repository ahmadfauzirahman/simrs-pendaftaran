<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "q_server_det".
 *
 * @property int $q_server_id
 * @property int $seq
 * @property int $sub_unit_id
 *
 * @property SubUnit $subUnit
 */
class QServerDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'q_server_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_server_id', 'seq', 'sub_unit_id'], 'required'],
            [['q_server_id', 'seq', 'sub_unit_id'], 'integer'],
            [['q_server_id', 'seq'], 'unique', 'targetAttribute' => ['q_server_id', 'seq']],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'q_server_id' => 'Q Server ID',
            'seq' => 'Seq',
            'sub_unit_id' => 'Sub Unit ID',
        ];
    }

    /**
     * Gets query for [[SubUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnit()
    {
        return $this->hasOne(SubUnit::className(), ['sub_unit_id' => 'sub_unit_id']);
    }
}
