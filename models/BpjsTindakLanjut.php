<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_tindak_lanjut".
 *
 * @property int $id
 * @property int|null $code
 * @property string|null $name
 * @property string|null $description
 */
class BpjsTindakLanjut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_tindak_lanjut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
