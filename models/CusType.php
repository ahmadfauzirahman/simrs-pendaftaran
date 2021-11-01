<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cus_type".
 *
 * @property int $cus_type_id
 * @property string|null $type_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Customer[] $customers
 */
class CusType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cus_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['type_name'], 'string', 'max' => 30],
            [['type_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cus_type_id' => 'Cus Type ID',
            'type_name' => 'Type Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['cus_type_id' => 'cus_type_id']);
    }
}
