<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu_det_ext".
 *
 * @property int $mcu_id
 * @property int $seq
 * @property int|null $patient_id
 * @property int|null $reg_id
 * @property int|null $folio_id
 * @property float|null $amount
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property string|null $notes
 * @property int|null $input_lab
 * @property int|null $input_rad
 *
 * @property McuExt $mcu
 * @property Folio $folio
 * @property McuIndetXt $mcuIndetXt
 */
class McuDetExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu_det_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mcu_id', 'seq'], 'required'],
            [['mcu_id', 'seq', 'patient_id', 'reg_id', 'folio_id', 'created_user_id', 'input_lab', 'input_rad'], 'integer'],
            [['amount'], 'number'],
            [['created_time'], 'safe'],
            [['notes'], 'string'],
            [['mcu_id', 'seq'], 'unique', 'targetAttribute' => ['mcu_id', 'seq']],
            [['mcu_id'], 'exist', 'skipOnError' => true, 'targetClass' => McuExt::className(), 'targetAttribute' => ['mcu_id' => 'mcu_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mcu_id' => 'Mcu ID',
            'seq' => 'Seq',
            'patient_id' => 'Patient ID',
            'reg_id' => 'Reg ID',
            'folio_id' => 'Folio ID',
            'amount' => 'Amount',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'notes' => 'Notes',
            'input_lab' => 'Input Lab',
            'input_rad' => 'Input Rad',
        ];
    }

    /**
     * Gets query for [[Mcu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcu()
    {
        return $this->hasOne(McuExt::className(), ['mcu_id' => 'mcu_id']);
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
    }

    /**
     * Gets query for [[McuIndetXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcuIndetXt()
    {
        return $this->hasOne(McuIndetXt::className(), ['mcu_id' => 'mcu_id', 'seq' => 'seq']);
    }
}
