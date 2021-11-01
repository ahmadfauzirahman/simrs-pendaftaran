<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maint_res".
 *
 * @property int $res_id
 * @property string $res_name
 * @property string $unit
 * @property float|null $value
 */
class MaintRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maint_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['res_id', 'res_name', 'unit'], 'required'],
            [['res_id'], 'integer'],
            [['value'], 'number'],
            [['res_name'], 'string', 'max' => 200],
            [['unit'], 'string', 'max' => 5],
            [['res_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'res_id' => 'Res ID',
            'res_name' => 'Res Name',
            'unit' => 'Unit',
            'value' => 'Value',
        ];
    }
}
