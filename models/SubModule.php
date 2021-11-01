<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_module".
 *
 * @property int $sub_mod_id
 * @property string|null $sub_mod_name
 * @property int|null $interface_id
 * @property resource|null $image
 * @property int|null $dept_id
 * @property int|null $unit_id
 * @property int|null $sub_unit_id
 * @property int|null $mod_id
 * @property int|null $barcode_enabled
 * @property int|null $payment_type
 * @property string|null $before_insert_url
 * @property string|null $after_insert_url
 * @property string|null $before_edit_url
 * @property string|null $after_edit_url
 * @property string|null $before_cancel_url
 * @property string|null $after_cancel_url
 * @property int|null $bi_x
 * @property int|null $bi_y
 * @property int|null $ai_x
 * @property int|null $ai_y
 * @property int|null $be_x
 * @property int|null $be_y
 * @property int|null $ae_x
 * @property int|null $ae_y
 * @property int|null $bc_x
 * @property int|null $bc_y
 * @property int|null $ac_x
 * @property int|null $ac_y
 *
 * @property Department $dept
 * @property Unit $unit
 * @property SubUnit $subUnit
 * @property Module $mod
 */
class SubModule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_module';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['interface_id', 'dept_id', 'unit_id', 'sub_unit_id', 'mod_id', 'barcode_enabled', 'payment_type', 'bi_x', 'bi_y', 'ai_x', 'ai_y', 'be_x', 'be_y', 'ae_x', 'ae_y', 'bc_x', 'bc_y', 'ac_x', 'ac_y'], 'integer'],
            [['image'], 'string'],
            [['sub_mod_name'], 'string', 'max' => 50],
            [['before_insert_url', 'after_insert_url', 'before_edit_url', 'after_edit_url', 'before_cancel_url', 'after_cancel_url'], 'string', 'max' => 200],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
            [['mod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Module::className(), 'targetAttribute' => ['mod_id' => 'mod_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_mod_id' => 'Sub Mod ID',
            'sub_mod_name' => 'Sub Mod Name',
            'interface_id' => 'Interface ID',
            'image' => 'Image',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
            'mod_id' => 'Mod ID',
            'barcode_enabled' => 'Barcode Enabled',
            'payment_type' => 'Payment Type',
            'before_insert_url' => 'Before Insert Url',
            'after_insert_url' => 'After Insert Url',
            'before_edit_url' => 'Before Edit Url',
            'after_edit_url' => 'After Edit Url',
            'before_cancel_url' => 'Before Cancel Url',
            'after_cancel_url' => 'After Cancel Url',
            'bi_x' => 'Bi X',
            'bi_y' => 'Bi Y',
            'ai_x' => 'Ai X',
            'ai_y' => 'Ai Y',
            'be_x' => 'Be X',
            'be_y' => 'Be Y',
            'ae_x' => 'Ae X',
            'ae_y' => 'Ae Y',
            'bc_x' => 'Bc X',
            'bc_y' => 'Bc Y',
            'ac_x' => 'Ac X',
            'ac_y' => 'Ac Y',
        ];
    }

    /**
     * Gets query for [[Dept]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
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

    /**
     * Gets query for [[Mod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMod()
    {
        return $this->hasOne(Module::className(), ['mod_id' => 'mod_id']);
    }
}
