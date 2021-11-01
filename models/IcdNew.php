<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "icd_new".
 *
 * @property int $icd_id
 * @property string|null $icd_code
 * @property string|null $description
 * @property string|null $short_description
 * @property int|null $icd_type_id
 * @property int|null $parent_icd_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $dtd_id
 */
class IcdNew extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icd_new';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icd_type_id', 'parent_icd_id', 'created_user_id', 'modified_user_id', 'dtd_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['icd_code'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 500],
            [['short_description'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'icd_id' => 'Icd ID',
            'icd_code' => 'Icd Code',
            'description' => 'Description',
            'short_description' => 'Short Description',
            'icd_type_id' => 'Icd Type ID',
            'parent_icd_id' => 'Parent Icd ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'dtd_id' => 'Dtd ID',
        ];
    }
}
