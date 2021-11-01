<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketing_card_ext".
 *
 * @property int $card_id
 * @property string|null $card_no
 * @property int|null $staff_id
 * @property string|null $card_date
 * @property int|null $ref_type_id
 * @property string|null $name
 * @property int|null $sex
 * @property string|null $place_of_birth
 * @property string|null $birth_date
 * @property string|null $address_line
 * @property string|null $rt
 * @property string|null $rw
 * @property int|null $village_id
 * @property int|null $subdistrict_id
 * @property int|null $district_id
 * @property string|null $zipcode
 * @property string|null $notes
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ReferenceType $refType
 * @property Village $village
 * @property Subdistrict $subdistrict
 * @property District $district
 * @property ScrtUser $createdUser
 * @property StaffOther $staff
 * @property MarketingCardExtDet[] $marketingCardExtDets
 * @property MarketingCardPatientExt[] $marketingCardPatientExts
 * @property Patient[] $patients
 */
class MarketingCardExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketing_card_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_id'], 'required'],
            [['card_id', 'staff_id', 'ref_type_id', 'sex', 'village_id', 'subdistrict_id', 'district_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['card_date', 'birth_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['card_no', 'name', 'address_line'], 'string', 'max' => 50],
            [['place_of_birth'], 'string', 'max' => 30],
            [['rt', 'rw'], 'string', 'max' => 3],
            [['zipcode'], 'string', 'max' => 5],
            [['card_no'], 'unique'],
            [['card_id'], 'unique'],
            [['ref_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReferenceType::className(), 'targetAttribute' => ['ref_type_id' => 'ref_type_id']],
            [['village_id'], 'exist', 'skipOnError' => true, 'targetClass' => Village::className(), 'targetAttribute' => ['village_id' => 'village_id']],
            [['subdistrict_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdistrict::className(), 'targetAttribute' => ['subdistrict_id' => 'subdistrict_id']],
            [['district_id'], 'exist', 'skipOnError' => true, 'targetClass' => District::className(), 'targetAttribute' => ['district_id' => 'district_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => StaffOther::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'card_id' => 'Card ID',
            'card_no' => 'Card No',
            'staff_id' => 'Staff ID',
            'card_date' => 'Card Date',
            'ref_type_id' => 'Ref Type ID',
            'name' => 'Name',
            'sex' => 'Sex',
            'place_of_birth' => 'Place Of Birth',
            'birth_date' => 'Birth Date',
            'address_line' => 'Address Line',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'village_id' => 'Village ID',
            'subdistrict_id' => 'Subdistrict ID',
            'district_id' => 'District ID',
            'zipcode' => 'Zipcode',
            'notes' => 'Notes',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[RefType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRefType()
    {
        return $this->hasOne(ReferenceType::className(), ['ref_type_id' => 'ref_type_id']);
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
     * Gets query for [[Subdistrict]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdistrict()
    {
        return $this->hasOne(Subdistrict::className(), ['subdistrict_id' => 'subdistrict_id']);
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
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(StaffOther::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[MarketingCardExtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardExtDets()
    {
        return $this->hasMany(MarketingCardExtDet::className(), ['card_id' => 'card_id']);
    }

    /**
     * Gets query for [[MarketingCardPatientExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarketingCardPatientExts()
    {
        return $this->hasMany(MarketingCardPatientExt::className(), ['card_id' => 'card_id']);
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['patient_id' => 'patient_id'])->viaTable('marketing_card_patient_ext', ['card_id' => 'card_id']);
    }
}
