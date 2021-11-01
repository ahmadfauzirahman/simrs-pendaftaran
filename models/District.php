<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property int $district_id
 * @property string|null $district_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $district_bpjs_code
 * @property string|null $province_bpjs_code
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property MarketingCardExt[] $marketingCardExts
 * @property ReferenceType[] $referenceTypes
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['district_name'], 'string', 'max' => 50],
            [['district_bpjs_code', 'province_bpjs_code'], 'string', 'max' => 15],
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
            'district_id' => 'District ID',
            'district_name' => 'District Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'district_bpjs_code' => 'District Bpjs Code',
            'province_bpjs_code' => 'Province Bpjs Code',
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
     * Gets query for [[MarketingCardExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardExts()
    {
        return $this->hasMany(MarketingCardExt::className(), ['district_id' => 'district_id']);
    }

    /**
     * Gets query for [[ReferenceTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReferenceTypes()
    {
        return $this->hasMany(ReferenceType::className(), ['district_id' => 'district_id']);
    }
}
