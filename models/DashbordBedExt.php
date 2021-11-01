<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dashbord_bed_ext".
 *
 * @property int $id_cos
 * @property string|null $cos_name
 * @property int|null $jumlah_bed
 * @property int|null $terisi
 * @property int|null $kosong
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class DashbordBedExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dashbord_bed_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlah_bed', 'terisi', 'kosong', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['cos_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cos' => 'Id Cos',
            'cos_name' => 'Cos Name',
            'jumlah_bed' => 'Jumlah Bed',
            'terisi' => 'Terisi',
            'kosong' => 'Kosong',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
