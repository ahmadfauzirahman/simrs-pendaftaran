<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_ppk_type".
 *
 * @property int $ppk_type_id
 * @property string|null $type_name
 */
class BpjsPpkType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_ppk_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ppk_type_id'], 'required'],
            [['ppk_type_id'], 'integer'],
            [['type_name'], 'string', 'max' => 50],
            [['ppk_type_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ppk_type_id' => 'Ppk Type ID',
            'type_name' => 'Type Name',
        ];
    }
}
