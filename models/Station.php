<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property int $station_id
 * @property string $station_no
 * @property string $station_name
 * @property int|null $station_post_x
 * @property int|null $station_pos_y
 * @property int|null $station_group_id
 *
 * @property StationGroup $stationGroup
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'station_no', 'station_name'], 'required'],
            [['station_id', 'station_post_x', 'station_pos_y', 'station_group_id'], 'integer'],
            [['station_no'], 'string', 'max' => 20],
            [['station_name'], 'string', 'max' => 100],
            [['station_id'], 'unique'],
            [['station_group_id'], 'exist', 'skipOnError' => true, 'targetClass' => StationGroup::className(), 'targetAttribute' => ['station_group_id' => 'station_group_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'station_id' => 'Station ID',
            'station_no' => 'Station No',
            'station_name' => 'Station Name',
            'station_post_x' => 'Station Post X',
            'station_pos_y' => 'Station Pos Y',
            'station_group_id' => 'Station Group ID',
        ];
    }

    /**
     * Gets query for [[StationGroup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStationGroup()
    {
        return $this->hasOne(StationGroup::className(), ['station_group_id' => 'station_group_id']);
    }
}
