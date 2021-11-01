<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_ruang".
 *
 * @property int $unit_id
 * @property string|null $unit_code
 * @property string|null $unit_name
 * @property string|null $description
 */
class BpjsRuang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_ruang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_code'], 'string', 'max' => 5],
            [['unit_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'unit_id' => 'Unit ID',
            'unit_code' => 'Unit Code',
            'unit_name' => 'Unit Name',
            'description' => 'Description',
        ];
    }
}
