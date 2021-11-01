<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "icd_type".
 *
 * @property int $icd_type_id
 * @property string|null $icd_type_name
 */
class IcdType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icd_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_type_id'], 'required'],
            [['icd_type_id'], 'integer'],
            [['icd_type_name'], 'string', 'max' => 50],
            [['icd_type_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'icd_type_id' => 'Icd Type ID',
            'icd_type_name' => 'Icd Type Name',
        ];
    }
}
