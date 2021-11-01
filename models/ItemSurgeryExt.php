<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_surgery_ext".
 *
 * @property int $item_id
 * @property string|null $item_name
 * @property string|null $report_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Surgery[] $surgeries
 */
class ItemSurgeryExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_surgery_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['report_name'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['item_name'], 'string', 'max' => 500],
            [['item_name'], 'unique'],
            [['item_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'item_name' => 'Item Name',
            'report_name' => 'Report Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Surgeries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSurgeries()
    {
        return $this->hasMany(Surgery::className(), ['report_surgery_id' => 'item_id']);
    }
}
