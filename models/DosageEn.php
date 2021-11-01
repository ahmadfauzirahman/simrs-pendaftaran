<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosage_en".
 *
 * @property string $dosage
 * @property string|null $dasage_english
 */
class DosageEn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosage_en';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dosage'], 'required'],
            [['dosage', 'dasage_english'], 'string', 'max' => 150],
            [['dosage'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dosage' => 'Dosage',
            'dasage_english' => 'Dasage English',
        ];
    }
}
