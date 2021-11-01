<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "station_group".
 *
 * @property int $station_group_id
 * @property string $station_group
 *
 * @property Station[] $stations
 */
class StationGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_group_id', 'station_group'], 'required'],
            [['station_group_id'], 'integer'],
            [['station_group'], 'string', 'max' => 50],
            [['station_group_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'station_group_id' => 'Station Group ID',
            'station_group' => 'Station Group',
        ];
    }

    /**
     * Gets query for [[Stations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStations()
    {
        return $this->hasMany(Station::className(), ['station_group_id' => 'station_group_id']);
    }
}
