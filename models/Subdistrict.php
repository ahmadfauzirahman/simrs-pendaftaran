<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subdistrict".
 *
 * @property int $subdistrict_id
 * @property string|null $subdistrict_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $subdistrict_bpjs_code
 * @property string|null $district_bpjs_code
 *
 * @property MarketingCardExt[] $marketingCardExts
 * @property ReferenceType[] $referenceTypes
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class Subdistrict extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subdistrict';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['subdistrict_name'], 'string', 'max' => 50],
            [['subdistrict_bpjs_code', 'district_bpjs_code'], 'string', 'max' => 15],
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
            'subdistrict_id' => 'Subdistrict ID',
            'subdistrict_name' => 'Subdistrict Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'subdistrict_bpjs_code' => 'Subdistrict Bpjs Code',
            'district_bpjs_code' => 'District Bpjs Code',
        ];
    }

    /**
     * Gets query for [[MarketingCardExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardExts()
    {
        return $this->hasMany(MarketingCardExt::className(), ['subdistrict_id' => 'subdistrict_id']);
    }

    /**
     * Gets query for [[ReferenceTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferenceTypes()
    {
        return $this->hasMany(ReferenceType::className(), ['subdistrict_id' => 'subdistrict_id']);
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
}
