<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dtd".
 *
 * @property int $dtd_id
 * @property int|null $no_urut
 * @property string|null $dtd_no
 * @property string|null $icd_descr
 * @property string|null $dtd_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $dtd_type
 */
class Dtd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dtd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_urut', 'created_user_id', 'modified_user_id', 'dtd_type'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['dtd_no'], 'string', 'max' => 20],
            [['icd_descr', 'dtd_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dtd_id' => 'Dtd ID',
            'no_urut' => 'No Urut',
            'dtd_no' => 'Dtd No',
            'icd_descr' => 'Icd Descr',
            'dtd_name' => 'Dtd Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'dtd_type' => 'Dtd Type',
        ];
    }
}
