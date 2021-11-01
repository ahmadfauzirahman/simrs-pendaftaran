<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inacbgs".
 *
 * @property int $inacbgs_id
 * @property int|null $cos_id
 * @property string|null $inacbgs_code
 * @property string|null $inacbgs_name
 * @property float|null $value
 */
class Inacbgs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inacbgs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inacbgs_id'], 'required'],
            [['inacbgs_id', 'cos_id'], 'integer'],
            [['value'], 'number'],
            [['inacbgs_code'], 'string', 'max' => 20],
            [['inacbgs_name'], 'string', 'max' => 200],
            [['inacbgs_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'inacbgs_id' => 'Inacbgs ID',
            'cos_id' => 'Cos ID',
            'inacbgs_code' => 'Inacbgs Code',
            'inacbgs_name' => 'Inacbgs Name',
            'value' => 'Value',
        ];
    }
}
