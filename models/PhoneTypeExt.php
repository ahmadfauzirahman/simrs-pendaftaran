<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "phone_type_ext".
 *
 * @property int $phone_type_id
 * @property string|null $type_name
 */
class PhoneTypeExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phone_type_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_type_id'], 'required'],
            [['phone_type_id'], 'integer'],
            [['type_name'], 'string', 'max' => 70],
            [['phone_type_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'phone_type_id' => 'Phone Type ID',
            'type_name' => 'Type Name',
        ];
    }
}
