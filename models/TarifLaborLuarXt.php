<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarif_labor_luar_xt".
 *
 * @property int $item_id
 * @property string|null $item_name
 * @property int|null $lab_id
 * @property string|null $description
 * @property float|null $unit_price
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property LaborLuarXt $lab
 */
class TarifLaborLuarXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarif_labor_luar_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'lab_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['unit_price'], 'number'],
            [['created_time', 'modified_time'], 'safe'],
            [['item_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 50],
            [['item_name'], 'unique'],
            [['item_id'], 'unique'],
            [['lab_id'], 'exist', 'skipOnError' => true, 'targetClass' => LaborLuarXt::className(), 'targetAttribute' => ['lab_id' => 'lab_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'item_name' => 'Item Name',
            'lab_id' => 'Lab ID',
            'description' => 'Description',
            'unit_price' => 'Unit Price',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Lab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLab()
    {
        return $this->hasOne(LaborLuarXt::className(), ['lab_id' => 'lab_id']);
    }
}
