<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_uom_det".
 *
 * @property int $uom_id
 * @property int $seq
 * @property string $unit_name
 * @property float|null $factor
 * @property float|null $conversion
 * @property string|null $description
 *
 * @property NUom $uom
 */
class NUomDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_uom_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uom_id', 'seq', 'unit_name'], 'required'],
            [['uom_id', 'seq'], 'integer'],
            [['factor', 'conversion'], 'number'],
            [['unit_name'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 30],
            [['uom_id', 'unit_name'], 'unique', 'targetAttribute' => ['uom_id', 'unit_name']],
            [['uom_id', 'seq'], 'unique', 'targetAttribute' => ['uom_id', 'seq']],
            [['uom_id'], 'exist', 'skipOnError' => true, 'targetClass' => NUom::className(), 'targetAttribute' => ['uom_id' => 'uom_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'uom_id' => 'Uom ID',
            'seq' => 'Seq',
            'unit_name' => 'Unit Name',
            'factor' => 'Factor',
            'conversion' => 'Conversion',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Uom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUom()
    {
        return $this->hasOne(NUom::className(), ['uom_id' => 'uom_id']);
    }
}
