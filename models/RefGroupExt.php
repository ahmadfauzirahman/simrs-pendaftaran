<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ref_group_ext".
 *
 * @property int $ref_group_id
 * @property string|null $ref_group_name
 */
class RefGroupExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ref_group_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ref_group_id'], 'required'],
            [['ref_group_id'], 'integer'],
            [['ref_group_name'], 'string', 'max' => 30],
            [['ref_group_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ref_group_id' => 'Ref Group ID',
            'ref_group_name' => 'Ref Group Name',
        ];
    }
}
