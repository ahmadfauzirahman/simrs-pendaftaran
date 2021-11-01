<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $company_id
 * @property string|null $company_name
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $address_line3
 * @property string|null $city
 * @property string|null $province
 * @property string|null $country
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $webpage
 * @property string|null $zipcode
 * @property resource|null $logo
 * @property string|null $notes
 * @property string|null $registered_tax_no
 * @property string|null $business_tax_reg_no
 * @property string|null $business_tax_reg_date
 * @property string|null $simple_tax_serial_no
 * @property string|null $standard_tax_serial_no
 * @property int|null $numbering_scheme
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ApSetup $apSetup
 * @property ArSetup $arSetup
 * @property AssetSetup $assetSetup
 * @property BankSetup $bankSetup
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlSetup $glSetup
 * @property HkSetup $hkSetup
 * @property MedrecSetup $medrecSetup
 * @property NPurchaseSetup $nPurchaseSetup
 * @property NutrientSetup $nutrientSetup
 * @property PurchaseSetup $purchaseSetup
 * @property RegSetup $regSetup
 * @property SalesSetup $salesSetup
 * @property SystemParam $systemParam
 * @property VisualSetting $visualSetting
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['logo', 'notes'], 'string'],
            [['business_tax_reg_date', 'created_time', 'modified_time'], 'safe'],
            [['numbering_scheme', 'created_user_id', 'modified_user_id'], 'integer'],
            [['company_name'], 'string', 'max' => 100],
            [['address_line1', 'address_line2', 'address_line3', 'email', 'webpage'], 'string', 'max' => 50],
            [['city', 'province', 'country', 'simple_tax_serial_no', 'standard_tax_serial_no'], 'string', 'max' => 20],
            [['phone', 'fax', 'registered_tax_no', 'business_tax_reg_no'], 'string', 'max' => 30],
            [['zipcode'], 'string', 'max' => 5],
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
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'address_line3' => 'Address Line3',
            'city' => 'City',
            'province' => 'Province',
            'country' => 'Country',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'webpage' => 'Webpage',
            'zipcode' => 'Zipcode',
            'logo' => 'Logo',
            'notes' => 'Notes',
            'registered_tax_no' => 'Registered Tax No',
            'business_tax_reg_no' => 'Business Tax Reg No',
            'business_tax_reg_date' => 'Business Tax Reg Date',
            'simple_tax_serial_no' => 'Simple Tax Serial No',
            'standard_tax_serial_no' => 'Standard Tax Serial No',
            'numbering_scheme' => 'Numbering Scheme',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ApSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApSetup()
    {
        return $this->hasOne(ApSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[ArSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetup()
    {
        return $this->hasOne(ArSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[AssetSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetSetup()
    {
        return $this->hasOne(AssetSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[BankSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankSetup()
    {
        return $this->hasOne(BankSetup::className(), ['company_id' => 'company_id']);
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
     * Gets query for [[GlSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlSetup()
    {
        return $this->hasOne(GlSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[HkSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHkSetup()
    {
        return $this->hasOne(HkSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[MedrecSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedrecSetup()
    {
        return $this->hasOne(MedrecSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[NPurchaseSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPurchaseSetup()
    {
        return $this->hasOne(NPurchaseSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[NutrientSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNutrientSetup()
    {
        return $this->hasOne(NutrientSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[PurchaseSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseSetup()
    {
        return $this->hasOne(PurchaseSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[RegSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegSetup()
    {
        return $this->hasOne(RegSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[SalesSetup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesSetup()
    {
        return $this->hasOne(SalesSetup::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[SystemParam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSystemParam()
    {
        return $this->hasOne(SystemParam::className(), ['company_id' => 'company_id']);
    }

    /**
     * Gets query for [[VisualSetting]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVisualSetting()
    {
        return $this->hasOne(VisualSetting::className(), ['company_id' => 'company_id']);
    }
}
