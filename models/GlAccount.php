<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_account".
 *
 * @property int $account_id
 * @property string|null $account_no
 * @property string|null $account_name
 * @property int|null $account_type
 * @property string|null $notes
 * @property int|null $disabled
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $no_urut
 * @property int|null $pc
 *
 * @property Asset[] $assets
 * @property Asset[] $assets0
 * @property Asset[] $assets1
 * @property Asset[] $assets2
 * @property Asset[] $assets3
 * @property AssetType[] $assetTypes
 * @property AssetType[] $assetTypes0
 * @property AssetType[] $assetTypes1
 * @property AssetType[] $assetTypes2
 * @property AssetType[] $assetTypes3
 * @property Bank[] $banks
 * @property Currency[] $currencies
 * @property Currency[] $currencies0
 * @property Currency[] $currencies1
 * @property Currency[] $currencies2
 * @property Currency[] $currencies3
 * @property Currency[] $currencies4
 * @property Currency[] $currencies5
 * @property Currency[] $currencies6
 * @property Currency[] $currencies7
 * @property DeptItem[] $deptItems
 * @property DeptItem[] $deptItems0
 * @property DeptItem[] $deptItems1
 * @property DeptItem[] $deptItems2
 * @property DeptItem[] $deptItems3
 * @property FiscalSetup[] $fiscalSetups
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlBalance[] $glBalances
 * @property GlBudget[] $glBudgets
 * @property GlJfoDet[] $glJfoDets
 * @property GlJournalDet[] $glJournalDets
 * @property GlJournalExtDet[] $glJournalExtDets
 * @property GlJscheduleDet[] $glJscheduleDets
 * @property GlJtemplateDet[] $glJtemplateDets
 * @property InvAdjAccount[] $invAdjAccounts
 * @property Item[] $items
 * @property Item[] $items0
 * @property Item[] $items1
 * @property Item[] $items2
 * @property Item[] $items3
 * @property ItemDist[] $itemDists
 * @property ItemType[] $itemTypes
 * @property ItemType[] $itemTypes0
 * @property ItemType[] $itemTypes1
 * @property ItemType[] $itemTypes2
 * @property ItemType[] $itemTypes3
 * @property NInvAdjAccount[] $nInvAdjAccounts
 * @property NItem[] $nItems
 * @property NItem[] $nItems0
 * @property NItem[] $nItems1
 * @property NItem[] $nItems2
 * @property NItem[] $nItems3
 * @property NItemType[] $nItemTypes
 * @property NItemType[] $nItemTypes0
 * @property NItemType[] $nItemTypes1
 * @property NItemType[] $nItemTypes2
 * @property NItemType[] $nItemTypes3
 * @property Tax[] $taxes
 * @property Tax[] $taxes0
 * @property Tax[] $taxes1
 * @property Unit[] $units
 */
class GlAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_type', 'disabled', 'created_user_id', 'modified_user_id', 'no_urut', 'pc'], 'integer'],
            [['notes'], 'string'],
            [['created_time', 'modified_time'], 'safe'],
            [['account_no'], 'string', 'max' => 20],
            [['account_name'], 'string', 'max' => 100],
            [['account_no'], 'unique'],
            [['account_name'], 'unique'],
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
            'account_id' => 'Account ID',
            'account_no' => 'Account No',
            'account_name' => 'Account Name',
            'account_type' => 'Account Type',
            'notes' => 'Notes',
            'disabled' => 'Disabled',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'no_urut' => 'No Urut',
            'pc' => 'Pc',
        ];
    }

    /**
     * Gets query for [[Assets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets()
    {
        return $this->hasMany(Asset::className(), ['asset_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Assets0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets0()
    {
        return $this->hasMany(Asset::className(), ['dep_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Assets1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets1()
    {
        return $this->hasMany(Asset::className(), ['accdep_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Assets2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets2()
    {
        return $this->hasMany(Asset::className(), ['disposal_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Assets3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets3()
    {
        return $this->hasMany(Asset::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[AssetTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes()
    {
        return $this->hasMany(AssetType::className(), ['asset_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[AssetTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes0()
    {
        return $this->hasMany(AssetType::className(), ['dep_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[AssetTypes1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes1()
    {
        return $this->hasMany(AssetType::className(), ['accdep_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[AssetTypes2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes2()
    {
        return $this->hasMany(AssetType::className(), ['disposal_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[AssetTypes3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetTypes3()
    {
        return $this->hasMany(AssetType::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Banks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBanks()
    {
        return $this->hasMany(Bank::className(), ['gl_account_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies()
    {
        return $this->hasMany(Currency::className(), ['ap_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies0()
    {
        return $this->hasMany(Currency::className(), ['ap_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies1()
    {
        return $this->hasMany(Currency::className(), ['ap_dp_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies2()
    {
        return $this->hasMany(Currency::className(), ['ar_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies3()
    {
        return $this->hasMany(Currency::className(), ['ar_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies4()
    {
        return $this->hasMany(Currency::className(), ['ar_dp_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies5]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies5()
    {
        return $this->hasMany(Currency::className(), ['rounding_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies6]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies6()
    {
        return $this->hasMany(Currency::className(), ['writeoff_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Currencies7]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrencies7()
    {
        return $this->hasMany(Currency::className(), ['exchg_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[DeptItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems()
    {
        return $this->hasMany(DeptItem::className(), ['sales_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[DeptItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems0()
    {
        return $this->hasMany(DeptItem::className(), ['sales_ret_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[DeptItems1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems1()
    {
        return $this->hasMany(DeptItem::className(), ['inventory_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[DeptItems2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems2()
    {
        return $this->hasMany(DeptItem::className(), ['cogs_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[DeptItems3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems3()
    {
        return $this->hasMany(DeptItem::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[FiscalSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFiscalSetups()
    {
        return $this->hasMany(FiscalSetup::className(), ['ret_earning_gl_acc_id' => 'account_id']);
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
     * Gets query for [[GlBalances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlBalances()
    {
        return $this->hasMany(GlBalance::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[GlBudgets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlBudgets()
    {
        return $this->hasMany(GlBudget::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[GlJournalDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalDets()
    {
        return $this->hasMany(GlJournalDet::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[GlJournalExtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalExtDets()
    {
        return $this->hasMany(GlJournalExtDet::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[GlJscheduleDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJscheduleDets()
    {
        return $this->hasMany(GlJscheduleDet::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[GlJtemplateDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtemplateDets()
    {
        return $this->hasMany(GlJtemplateDet::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[InvAdjAccounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjAccounts()
    {
        return $this->hasMany(InvAdjAccount::className(), ['gl_account_id' => 'account_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Items0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems0()
    {
        return $this->hasMany(Item::className(), ['sales_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Items1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems1()
    {
        return $this->hasMany(Item::className(), ['inventory_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Items2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems2()
    {
        return $this->hasMany(Item::className(), ['cogs_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Items3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems3()
    {
        return $this->hasMany(Item::className(), ['sales_ret_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[ItemDists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemDists()
    {
        return $this->hasMany(ItemDist::className(), ['account_id' => 'account_id']);
    }

    /**
     * Gets query for [[ItemTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes()
    {
        return $this->hasMany(ItemType::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[ItemTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes0()
    {
        return $this->hasMany(ItemType::className(), ['sales_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[ItemTypes1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes1()
    {
        return $this->hasMany(ItemType::className(), ['inventory_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[ItemTypes2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes2()
    {
        return $this->hasMany(ItemType::className(), ['cogs_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[ItemTypes3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemTypes3()
    {
        return $this->hasMany(ItemType::className(), ['sales_ret_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NInvAdjAccounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjAccounts()
    {
        return $this->hasMany(NInvAdjAccount::className(), ['gl_account_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems()
    {
        return $this->hasMany(NItem::className(), ['sales_ret_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems0()
    {
        return $this->hasMany(NItem::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItems1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems1()
    {
        return $this->hasMany(NItem::className(), ['sales_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItems2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems2()
    {
        return $this->hasMany(NItem::className(), ['inventory_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItems3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems3()
    {
        return $this->hasMany(NItem::className(), ['cogs_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItemTypes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes()
    {
        return $this->hasMany(NItemType::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItemTypes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes0()
    {
        return $this->hasMany(NItemType::className(), ['sales_disc_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItemTypes1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes1()
    {
        return $this->hasMany(NItemType::className(), ['inventory_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItemTypes2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes2()
    {
        return $this->hasMany(NItemType::className(), ['cogs_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NItemTypes3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItemTypes3()
    {
        return $this->hasMany(NItemType::className(), ['sales_ret_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Taxes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxes()
    {
        return $this->hasMany(Tax::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Taxes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxes0()
    {
        return $this->hasMany(Tax::className(), ['sales_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Taxes1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTaxes1()
    {
        return $this->hasMany(Tax::className(), ['purchase_gl_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[Units]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['patient_ar_gl_acc_id' => 'account_id']);
    }
}
