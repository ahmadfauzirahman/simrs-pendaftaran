<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uom".
 *
 * @property int $uom_id
 * @property string|null $uom_name
 * @property string|null $uom_eng
 * @property string|null $main_unit
 * @property string|null $description
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Item[] $items
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property UomDet[] $uomDets
 */
class Uom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uom_id'], 'required'],
            [['uom_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['uom_name', 'uom_eng', 'description'], 'string', 'max' => 30],
            [['main_unit'], 'string', 'max' => 5],
            [['uom_name'], 'unique'],
            [['uom_id'], 'unique'],
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
            'uom_id' => 'Uom ID',
            'uom_name' => 'Uom Name',
            'uom_eng' => 'Uom Eng',
            'main_unit' => 'Main Unit',
            'description' => 'Description',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['uom_id' => 'uom_id']);
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
     * Gets query for [[UomDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUomDets()
    {
        return $this->hasMany(UomDet::className(), ['uom_id' => 'uom_id']);
    }
}
