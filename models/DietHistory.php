<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diet_history".
 *
 * @property int $history_id
 * @property int|null $folio_id
 * @property int|null $diet_id
 * @property string|null $description
 * @property int|null $created_by
 * @property string|null $created_time
 */
class DietHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diet_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_id'], 'required'],
            [['history_id', 'folio_id', 'diet_id', 'created_by'], 'integer'],
            [['created_time'], 'safe'],
            [['description'], 'string', 'max' => 50],
            [['history_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'history_id' => 'History ID',
            'folio_id' => 'Folio ID',
            'diet_id' => 'Diet ID',
            'description' => 'Description',
            'created_by' => 'Created By',
            'created_time' => 'Created Time',
        ];
    }
}
