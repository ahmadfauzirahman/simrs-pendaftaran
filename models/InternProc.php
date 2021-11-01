<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "intern_proc".
 *
 * @property int $intern_proc_id
 * @property int $icd_id
 * @property string|null $intern_proc_name
 * @property string|null $intern_proc_descr
 */
class InternProc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'intern_proc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intern_proc_id', 'icd_id'], 'required'],
            [['intern_proc_id', 'icd_id'], 'integer'],
            [['intern_proc_name', 'intern_proc_descr'], 'string', 'max' => 100],
            [['intern_proc_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'intern_proc_id' => 'Intern Proc ID',
            'icd_id' => 'Icd ID',
            'intern_proc_name' => 'Intern Proc Name',
            'intern_proc_descr' => 'Intern Proc Descr',
        ];
    }
}
