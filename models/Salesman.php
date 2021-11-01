<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "salesman".
 *
 * @property int $salesman_id
 * @property string|null $salesman_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $salesman_no
 * @property string|null $phone
 * @property string|null $notes
 *
 * @property ArInv[] $arInvs
 * @property Customer[] $customers
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Sorder[] $sorders
 */
class Salesman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'salesman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id', 'salesman_no'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['salesman_name', 'phone'], 'string', 'max' => 30],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'salesman_id' => 'Salesman ID',
            'salesman_name' => 'Salesman Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'salesman_no' => 'Salesman No',
            'phone' => 'Phone',
            'notes' => 'Notes',
        ];
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['salesman_id' => 'salesman_id']);
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['salesman_id' => 'salesman_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[Sorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders()
    {
        return $this->hasMany(Sorder::className(), ['salesman_id' => 'salesman_id']);
    }
}
