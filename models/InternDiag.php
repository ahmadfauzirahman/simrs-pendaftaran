<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "intern_diag".
 *
 * @property int $intern_diag_id
 * @property int $icd_id
 * @property string|null $intern_diag_name
 * @property string|null $intern_diag_descr
 */
class InternDiag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'intern_diag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intern_diag_id', 'icd_id'], 'required'],
            [['intern_diag_id', 'icd_id'], 'integer'],
            [['intern_diag_name'], 'string', 'max' => 20],
            [['intern_diag_descr'], 'string', 'max' => 100],
            [['intern_diag_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'intern_diag_id' => 'Intern Diag ID',
            'icd_id' => 'Icd ID',
            'intern_diag_name' => 'Intern Diag Name',
            'intern_diag_descr' => 'Intern Diag Descr',
        ];
    }
}
