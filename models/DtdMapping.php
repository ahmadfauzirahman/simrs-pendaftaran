<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dtd_mapping".
 *
 * @property int $icd_id
 * @property string|null $icd_code
 * @property string|null $description
 * @property int|null $DTD
 */
class DtdMapping extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dtd_mapping';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_id'], 'required'],
            [['icd_id', 'DTD'], 'integer'],
            [['icd_code'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
            [['icd_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'icd_id' => 'Icd ID',
            'icd_code' => 'Icd Code',
            'description' => 'Description',
            'DTD' => 'Dtd',
        ];
    }
}
