<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_location".
 *
 * @property int $asset_location_id
 * @property string $asset_location_no
 * @property int $asset_id
 * @property string $location_date
 * @property int $location_id
 * @property string|null $description
 * @property int $posted
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class AssetLocation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_location';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_location_id', 'asset_location_no', 'asset_id', 'location_date', 'location_id', 'posted'], 'required'],
            [['asset_location_id', 'asset_id', 'location_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['location_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['asset_location_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
            [['asset_location_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'asset_location_id' => 'Asset Location ID',
            'asset_location_no' => 'Asset Location No',
            'asset_id' => 'Asset ID',
            'location_date' => 'Location Date',
            'location_id' => 'Location ID',
            'description' => 'Description',
            'posted' => 'Posted',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
