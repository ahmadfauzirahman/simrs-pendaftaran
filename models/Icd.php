<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "icd".
 *
 * @property int $icd_id
 * @property string|null $icd_code
 * @property string|null $description
 * @property int|null $dtd_id
 * @property string|null $dtd
 * @property int|null $parent_icd_id
 * @property int|null $icd_type_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property FolioDiag[] $folioDiags
 * @property FolioProc[] $folioProcs
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Icd $parentIcd
 * @property Icd[] $icds
 * @property IcdProc[] $icdProcs
 * @property OkupasiIcdXt[] $okupasiIcdXts
 * @property RegDiagExt[] $regDiagExts
 */
class Icd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'icd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dtd_id', 'parent_icd_id', 'icd_type_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['icd_code', 'dtd'], 'string', 'max' => 10],
            [['description'], 'string', 'max' => 100],
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
            'dtd_id' => 'Dtd ID',
            'dtd' => 'Dtd',
            'parent_icd_id' => 'Parent Icd ID',
            'icd_type_id' => 'Icd Type ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[FolioDiags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioDiags()
    {
        return $this->hasMany(FolioDiag::className(), ['icd_id' => 'icd_id']);
    }

    /**
     * Gets query for [[FolioProcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolioProcs()
    {
        return $this->hasMany(FolioProc::className(), ['icd_id' => 'icd_id']);
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

    /**
     * Gets query for [[Icds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcds()
    {
        return $this->hasMany(Icd::className(), ['parent_icd_id' => 'icd_id']);
    }

    /**
     * Gets query for [[IcdProcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcdProcs()
    {
        return $this->hasMany(IcdProc::className(), ['parent_icd_id' => 'icd_id']);
    }

    /**
     * Gets query for [[OkupasiIcdXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiIcdXts()
    {
        return $this->hasMany(OkupasiIcdXt::className(), ['icd_id' => 'icd_id']);
    }

    /**
     * Gets query for [[RegDiagExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegDiagExts()
    {
        return $this->hasMany(RegDiagExt::className(), ['icd_id' => 'icd_id']);
    }
}
