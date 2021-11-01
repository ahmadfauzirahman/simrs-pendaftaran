<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_diag_ext".
 *
 * @property int $reg_id
 * @property int $seq
 * @property int|null $icd_id
 * @property int|null $diag_type_id
 * @property float|null $price
 * @property int|null $deleted_id
 * @property string|null $tindakan
 * @property string|null $created_time
 * @property int|null $created_by
 * @property int|null $modified_by
 * @property string|null $modified_time
 *
 * @property Icd $icd
 * @property Registration $reg
 */
class RegDiagExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_diag_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'seq'], 'required'],
            [['reg_id', 'seq', 'icd_id', 'diag_type_id', 'deleted_id', 'created_by', 'modified_by'], 'integer'],
            [['price'], 'number'],
            [['tindakan'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['reg_id', 'seq'], 'unique', 'targetAttribute' => ['reg_id', 'seq']],
            [['icd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Icd::className(), 'targetAttribute' => ['icd_id' => 'icd_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'seq' => 'Seq',
            'icd_id' => 'Icd ID',
            'diag_type_id' => 'Diag Type ID',
            'price' => 'Price',
            'deleted_id' => 'Deleted ID',
            'tindakan' => 'Tindakan',
            'created_time' => 'Created Time',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'modified_time' => 'Modified Time',
        ];
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

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }
}
