<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_acc_type".
 *
 * @property int $type_id
 * @property string|null $type_name
 */
class GlAccType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_acc_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id'], 'required'],
            [['type_id'], 'integer'],
            [['type_name'], 'string', 'max' => 50],
            [['type_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type_name' => 'Type Name',
        ];
    }
}
