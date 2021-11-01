<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reference_type".
 *
 * @property int $ref_type_id
 * @property string|null $type_name
 * @property int|null $bpjs_refer_type
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $source
 * @property int|null $bpjs_online
 * @property string|null $address_line
 * @property string|null $code_ref
 * @property int|null $city_id
 * @property int|null $district_id
 * @property int|null $subdistrict_id
 * @property int|null $province_id
 * @property int|null $village_id
 * @property string|null $pic_name
 * @property string|null $handphone
 * @property int|null $ref_type_group
 * @property int|null $sub_district_id
 *
 * @property MarketingCardExt[] $marketingCardExts
 * @property MarketingVisite[] $marketingVisites
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property City $city
 * @property District $district
 * @property Subdistrict $subdistrict
 * @property Province $province
 * @property Village $village
 * @property Registration[] $registrations
 * @property RegistrationFill[] $registrationFills
 */
class ReferenceType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reference_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bpjs_refer_type', 'created_user_id', 'modified_user_id', 'source', 'bpjs_online', 'city_id', 'district_id', 'subdistrict_id', 'province_id', 'village_id', 'ref_type_group', 'sub_district_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['type_name', 'address_line'], 'string', 'max' => 100],
            [['code_ref'], 'string', 'max' => 10],
            [['pic_name', 'handphone'], 'string', 'max' => 50],
            [['type_name'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'city_id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'district_id']],
            [['subdistrict_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdistrict::className(), 'targetAttribute' => ['subdistrict_id' => 'subdistrict_id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'province_id']],
            [['village_id'], 'exist', 'skipOnError' => true, 'targetClass' => Village::className(), 'targetAttribute' => ['village_id' => 'village_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ref_type_id' => 'Ref Type ID',
            'type_name' => 'Type Name',
            'bpjs_refer_type' => 'Bpjs Refer Type',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'source' => 'Source',
            'bpjs_online' => 'Bpjs Online',
            'address_line' => 'Address Line',
            'code_ref' => 'Code Ref',
            'city_id' => 'City ID',
            'district_id' => 'District ID',
            'subdistrict_id' => 'Subdistrict ID',
            'province_id' => 'Province ID',
            'village_id' => 'Village ID',
            'pic_name' => 'Pic Name',
            'handphone' => 'Handphone',
            'ref_type_group' => 'Ref Type Group',
            'sub_district_id' => 'Sub District ID',
        ];
    }

    /**
     * Gets query for [[MarketingCardExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardExts()
    {
        return $this->hasMany(MarketingCardExt::className(), ['ref_type_id' => 'ref_type_id']);
    }

    /**
     * Gets query for [[MarketingVisites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingVisites()
    {
        return $this->hasMany(MarketingVisite::className(), ['reference_id' => 'ref_type_id']);
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
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['city_id' => 'city_id']);
    }

    /**
     * Gets query for [[District]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDistrict()
    {
        return $this->hasOne(District::className(), ['district_id' => 'district_id']);
    }

    /**
     * Gets query for [[Subdistrict]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdistrict()
    {
        return $this->hasOne(Subdistrict::className(), ['subdistrict_id' => 'subdistrict_id']);
    }

    /**
     * Gets query for [[Province]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_id']);
    }

    /**
     * Gets query for [[Village]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVillage()
    {
        return $this->hasOne(Village::className(), ['village_id' => 'village_id']);
    }

    /**
     * Gets query for [[Registrations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['ref_type_id' => 'ref_type_id']);
    }

    /**
     * Gets query for [[RegistrationFills]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrationFills()
    {
        return $this->hasMany(RegistrationFill::className(), ['ref_type_id' => 'ref_type_id']);
    }
}
