<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dept_item".
 *
 * @property int $id
 * @property int|null $dept_id
 * @property int|null $unit_id
 * @property int|null $sub_unit_id
 * @property int|null $item_id
 * @property string|null $description
 * @property float|null $price
 * @property float|null $discount
 * @property int|null $compulsory
 * @property float|null $compul_qty
 * @property int|null $compul_event
 * @property int|null $auto_charge
 * @property int|null $auto_charge_type
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $sales_disc_gl_acc_id
 * @property int|null $sales_ret_gl_acc_id
 * @property int|null $inventory_gl_acc_id
 * @property int|null $sales_gl_acc_id
 * @property int|null $cogs_gl_acc_id
 *
 * @property Department $dept
 * @property GlAccount $salesDiscGlAcc
 * @property GlAccount $salesRetGlAcc
 * @property GlAccount $inventoryGlAcc
 * @property GlAccount $cogsGlAcc
 * @property Unit $unit
 * @property SubUnit $subUnit
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Item $item
 * @property GlAccount $salesGlAcc
 */
class DeptItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dept_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id', 'unit_id', 'sub_unit_id', 'item_id', 'compulsory', 'compul_event', 'auto_charge', 'auto_charge_type', 'created_user_id', 'modified_user_id', 'sales_disc_gl_acc_id', 'sales_ret_gl_acc_id', 'inventory_gl_acc_id', 'sales_gl_acc_id', 'cogs_gl_acc_id'], 'integer'],
            [['price', 'discount', 'compul_qty'], 'number'],
            [['created_time', 'modified_time'], 'safe'],
            [['description'], 'string', 'max' => 100],
            [['dept_id', 'unit_id', 'sub_unit_id', 'item_id'], 'unique', 'targetAttribute' => ['dept_id', 'unit_id', 'sub_unit_id', 'item_id']],
            [['dept_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['dept_id' => 'dept_id']],
            [['sales_disc_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_disc_gl_acc_id' => 'account_id']],
            [['sales_ret_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_ret_gl_acc_id' => 'account_id']],
            [['inventory_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['inventory_gl_acc_id' => 'account_id']],
            [['cogs_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['cogs_gl_acc_id' => 'account_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
            [['sub_unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => SubUnit::className(), 'targetAttribute' => ['sub_unit_id' => 'sub_unit_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dept_id' => 'Dept ID',
            'unit_id' => 'Unit ID',
            'sub_unit_id' => 'Sub Unit ID',
            'item_id' => 'Item ID',
            'description' => 'Description',
            'price' => 'Price',
            'discount' => 'Discount',
            'compulsory' => 'Compulsory',
            'compul_qty' => 'Compul Qty',
            'compul_event' => 'Compul Event',
            'auto_charge' => 'Auto Charge',
            'auto_charge_type' => 'Auto Charge Type',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'sales_disc_gl_acc_id' => 'Sales Disc Gl Acc ID',
            'sales_ret_gl_acc_id' => 'Sales Ret Gl Acc ID',
            'inventory_gl_acc_id' => 'Inventory Gl Acc ID',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'cogs_gl_acc_id' => 'Cogs Gl Acc ID',
        ];
    }

    /**
     * Gets query for [[Dept]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDept()
    {
        return $this->hasOne(Department::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[SalesDiscGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesDiscGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_disc_gl_acc_id']);
    }

    /**
     * Gets query for [[SalesRetGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesRetGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_ret_gl_acc_id']);
    }

    /**
     * Gets query for [[InventoryGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventoryGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'inventory_gl_acc_id']);
    }

    /**
     * Gets query for [[CogsGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCogsGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'cogs_gl_acc_id']);
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
    }

    /**
     * Gets query for [[SubUnit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubUnit()
    {
        return $this->hasOne(SubUnit::className(), ['sub_unit_id' => 'sub_unit_id']);
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
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
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
}
