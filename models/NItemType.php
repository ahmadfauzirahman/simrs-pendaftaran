<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_item_type".
 *
 * @property int $item_type_id
 * @property string|null $type_name
 * @property int|null $inventory
 * @property int|null $costing_method
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $sales_gl_acc_id
 * @property int|null $sales_disc_gl_acc_id
 * @property int|null $inventory_gl_acc_id
 * @property int|null $cogs_gl_acc_id
 * @property int|null $cat
 * @property int|null $sales_ret_gl_acc_id
 *
 * @property NItem[] $nItems
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlAccount $salesGlAcc
 * @property GlAccount $salesDiscGlAcc
 * @property GlAccount $inventoryGlAcc
 * @property GlAccount $cogsGlAcc
 * @property GlAccount $salesRetGlAcc
 */
class NItemType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_item_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inventory', 'costing_method', 'created_user_id', 'modified_user_id', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_id', 'cogs_gl_acc_id', 'cat', 'sales_ret_gl_acc_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['type_name'], 'string', 'max' => 50],
            [['type_name'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
            [['sales_disc_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_disc_gl_acc_id' => 'account_id']],
            [['inventory_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['inventory_gl_acc_id' => 'account_id']],
            [['cogs_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['cogs_gl_acc_id' => 'account_id']],
            [['sales_ret_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_ret_gl_acc_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_type_id' => 'Item Type ID',
            'type_name' => 'Type Name',
            'inventory' => 'Inventory',
            'costing_method' => 'Costing Method',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'sales_disc_gl_acc_id' => 'Sales Disc Gl Acc ID',
            'inventory_gl_acc_id' => 'Inventory Gl Acc ID',
            'cogs_gl_acc_id' => 'Cogs Gl Acc ID',
            'cat' => 'Cat',
            'sales_ret_gl_acc_id' => 'Sales Ret Gl Acc ID',
        ];
    }

    /**
     * Gets query for [[NItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNItems()
    {
        return $this->hasMany(NItem::className(), ['item_type_id' => 'item_type_id']);
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
     * Gets query for [[SalesGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_gl_acc_id']);
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
     * Gets query for [[SalesRetGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesRetGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_ret_gl_acc_id']);
    }
}
