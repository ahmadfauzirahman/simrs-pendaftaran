<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diag_type".
 *
 * @property int $diag_type_id
 * @property string|null $diag_type_name
 */
class DiagType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diag_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diag_type_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'diag_type_id' => 'Diag Type ID',
            'diag_type_name' => 'Diag Type Name',
        ];
    }
}
