<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cos_item".
 *
 * @property int $cos_id
 * @property int $item_id
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
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Item $item
 * @property Cos $cos
 */
class CosItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cos_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cos_id', 'item_id'], 'required'],
            [['cos_id', 'item_id', 'created_user_id', 'modified_user_id', 'sales_disc_gl_acc_id', 'sales_ret_gl_acc_id', 'inventory_gl_acc_id', 'sales_gl_acc_id', 'cogs_gl_acc_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['cos_id', 'item_id'], 'unique', 'targetAttribute' => ['cos_id', 'item_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['cos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cos::className(), 'targetAttribute' => ['cos_id' => 'cos_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cos_id' => 'Cos ID',
            'item_id' => 'Item ID',
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
     * Gets query for [[Cos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCos()
    {
        return $this->hasOne(Cos::className(), ['cos_id' => 'cos_id']);
    }
}
