<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_mv_type".
 *
 * @property int $type_id
 * @property string|null $type_name
 */
class AssetMvType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_mv_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_id'], 'required'],
            [['type_id'], 'integer'],
            [['type_name'], 'string', 'max' => 20],
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
