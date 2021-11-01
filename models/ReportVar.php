<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report_var".
 *
 * @property int $variable_id
 * @property string|null $variable_name
 * @property string|null $variable_value
 * @property string|null $category
 */
class ReportVar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report_var';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['variable_name', 'category'], 'string', 'max' => 30],
            [['variable_value'], 'string', 'max' => 255],
            [['variable_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'variable_id' => 'Variable ID',
            'variable_name' => 'Variable Name',
            'variable_value' => 'Variable Value',
            'category' => 'Category',
        ];
    }
}
