<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tax".
 *
 * @property int $tax_id
 * @property string|null $tax_name
 * @property float|null $rate
 * @property int|null $sales_gl_acc_id
 * @property int|null $purchase_gl_acc_id
 * @property int|null $tax_type
 * @property int|null $amount_calc_type
 * @property string|null $description
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ApInv[] $apInvs
 * @property ApInv[] $apInvs0
 * @property ArInv[] $arInvs
 * @property ArInv[] $arInvs0
 * @property ArInv[] $arInvs1
 * @property ArInv[] $arInvs2
 * @property ArInv[] $arInvs3
 * @property Customer[] $customers
 * @property Customer[] $customers0
 * @property Folio[] $folios
 * @property Folio[] $folios0
 * @property GlJfoDet[] $glJfoDets
 * @property GlJfoDet[] $glJfoDets0
 * @property Item[] $items
 * @property Item[] $items0
 * @property Item[] $items1
 * @property Item[] $items2
 * @property Item[] $items3
 * @property Item[] $items4
 * @property NItem[] $nItems
 * @property NItem[] $nItems0
 * @property NItem[] $nItems1
 * @property NItem[] $nItems2
 * @property NItem[] $nItems3
 * @property NItem[] $nItems4
 * @property NPorder[] $nPorders
 * @property NPorder[] $nPorders0
 * @property NPorder[] $nPorders1
 * @property NPorder[] $nPorders2
 * @property NPorder[] $nPorders3
 * @property Porder[] $porders
 * @property Porder[] $porders0
 * @property Porder[] $porders1
 * @property Porder[] $porders2
 * @property Porder[] $porders3
 * @property Sorder[] $sorders
 * @property Sorder[] $sorders0
 * @property Sorder[] $sorders1
 * @property Sorder[] $sorders2
 * @property Sorder[] $sorders3
 * @property GlAccount $salesGlAcc
 * @property GlAccount $salesGlAcc0
 * @property GlAccount $purchaseGlAcc
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Unit[] $units
 * @property Unit[] $units0
 * @property Vendor[] $vendors
 * @property Vendor[] $vendors0
 */
class Tax extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tax';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rate'], 'number'],
            [['sales_gl_acc_id', 'purchase_gl_acc_id', 'tax_type', 'amount_calc_type', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['tax_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 100],
            [['tax_name'], 'unique'],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
            [['purchase_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['purchase_gl_acc_id' => 'account_id']],
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
            'tax_id' => 'Tax ID',
            'tax_name' => 'Tax Name',
            'rate' => 'Rate',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'purchase_gl_acc_id' => 'Purchase Gl Acc ID',
            'tax_type' => 'Tax Type',
            'amount_calc_type' => 'Amount Calc Type',
            'description' => 'Description',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ApInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs()
    {
        return $this->hasMany(ApInv::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[ApInvs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvs0()
    {
        return $this->hasMany(ApInv::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[ArInvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs()
    {
        return $this->hasMany(ArInv::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[ArInvs0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs0()
    {
        return $this->hasMany(ArInv::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[ArInvs1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs1()
    {
        return $this->hasMany(ArInv::className(), ['taxable_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[ArInvs2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs2()
    {
        return $this->hasMany(ArInv::className(), ['taxable_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[ArInvs3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArInvs3()
    {
        return $this->hasMany(ArInv::className(), ['taxable_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Customers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers0()
    {
        return $this->hasMany(Customer::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Folios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios0()
    {
        return $this->hasMany(Folio::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[GlJfoDets0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets0()
    {
        return $this->hasMany(GlJfoDet::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['sales_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Items0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems0()
    {
        return $this->hasMany(Item::className(), ['sales_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Items1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems1()
    {
        return $this->hasMany(Item::className(), ['purchase_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Items2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems2()
    {
        return $this->hasMany(Item::className(), ['purchase_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Items3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems3()
    {
        return $this->hasMany(Item::className(), ['purchase_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Items4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems4()
    {
        return $this->hasMany(Item::className(), ['sales_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems()
    {
        return $this->hasMany(NItem::className(), ['sales_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NItems0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems0()
    {
        return $this->hasMany(NItem::className(), ['purchase_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NItems1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems1()
    {
        return $this->hasMany(NItem::className(), ['purchase_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NItems2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems2()
    {
        return $this->hasMany(NItem::className(), ['purchase_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NItems3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems3()
    {
        return $this->hasMany(NItem::className(), ['sales_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NItems4]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems4()
    {
        return $this->hasMany(NItem::className(), ['sales_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NPorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders()
    {
        return $this->hasMany(NPorder::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NPorders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders0()
    {
        return $this->hasMany(NPorder::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NPorders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders1()
    {
        return $this->hasMany(NPorder::className(), ['taxable_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NPorders2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders2()
    {
        return $this->hasMany(NPorder::className(), ['taxable_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[NPorders3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNPorders3()
    {
        return $this->hasMany(NPorder::className(), ['taxable_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Porders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders()
    {
        return $this->hasMany(Porder::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Porders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders0()
    {
        return $this->hasMany(Porder::className(), ['taxable_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Porders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders1()
    {
        return $this->hasMany(Porder::className(), ['taxable_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Porders2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders2()
    {
        return $this->hasMany(Porder::className(), ['taxable_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Porders3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPorders3()
    {
        return $this->hasMany(Porder::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Sorders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders()
    {
        return $this->hasMany(Sorder::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Sorders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders0()
    {
        return $this->hasMany(Sorder::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Sorders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders1()
    {
        return $this->hasMany(Sorder::className(), ['taxable_tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Sorders2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders2()
    {
        return $this->hasMany(Sorder::className(), ['taxable_tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Sorders3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSorders3()
    {
        return $this->hasMany(Sorder::className(), ['taxable_tax3_id' => 'tax_id']);
    }

    /**
     * Gets query for [[SalesGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_gl_acc_id']);
    }

    /**
     * Gets query for [[SalesGlAcc0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesGlAcc0()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_gl_acc_id']);
    }

    /**
     * Gets query for [[PurchaseGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPurchaseGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'purchase_gl_acc_id']);
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
     * Gets query for [[Units]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Units0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits0()
    {
        return $this->hasMany(Unit::className(), ['tax2_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Vendors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendors()
    {
        return $this->hasMany(Vendor::className(), ['tax1_id' => 'tax_id']);
    }

    /**
     * Gets query for [[Vendors0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendors0()
    {
        return $this->hasMany(Vendor::className(), ['tax2_id' => 'tax_id']);
    }
}
