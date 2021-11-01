<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bpjs_ppk".
 *
 * @property string $ppk_code
 * @property int|null $ppk_type_id
 * @property string|null $district_bpjs_code
 * @property string|null $ppk_name
 */
class BpjsPpk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bpjs_ppk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ppk_code'], 'required'],
            [['ppk_type_id'], 'integer'],
            [['ppk_code'], 'string', 'max' => 20],
            [['district_bpjs_code'], 'string', 'max' => 15],
            [['ppk_name'], 'string', 'max' => 100],
            [['ppk_code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ppk_code' => 'Ppk Code',
            'ppk_type_id' => 'Ppk Type ID',
            'district_bpjs_code' => 'District Bpjs Code',
            'ppk_name' => 'Ppk Name',
        ];
    }
}
