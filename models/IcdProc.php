<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "icd_proc".
 *
 * @property int $icd_id
 * @property string|null $icd_code
 * @property string|null $description
 * @property int|null $parent_icd_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Icd $parentIcd
 */
class IcdProc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icd_proc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_icd_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['icd_code'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 150],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['parent_icd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Icd::className(), 'targetAttribute' => ['parent_icd_id' => 'icd_id']],
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
            'parent_icd_id' => 'Parent Icd ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
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
     * Gets query for [[ParentIcd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentIcd()
    {
        return $this->hasOne(Icd::className(), ['icd_id' => 'parent_icd_id']);
    }
}
