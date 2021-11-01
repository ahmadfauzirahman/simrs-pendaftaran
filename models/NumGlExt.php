<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "num_gl_ext".
 *
 * @property int $numbering_id
 * @property string|null $numbering_name
 * @property int|null $next_number
 * @property string|null $code
 * @property string|null $format
 */
class NumGlExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'num_gl_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numbering_id'], 'required'],
            [['numbering_id', 'next_number'], 'integer'],
            [['numbering_name'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 11],
            [['format'], 'string', 'max' => 100],
            [['numbering_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'numbering_id' => 'Numbering ID',
            'numbering_name' => 'Numbering Name',
            'next_number' => 'Next Number',
            'code' => 'Code',
            'format' => 'Format',
        ];
    }
}
