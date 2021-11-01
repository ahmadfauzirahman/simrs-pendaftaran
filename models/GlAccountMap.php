<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_account_map".
 *
 * @property int|null $sub_unit_id
 * @property int|null $cos_id
 * @property int|null $item_id
 * @property int|null $sales_gl_acc_id
 * @property int|null $sales_disc_gl_acc_id
 * @property int|null $inventory_gl_acc_id
 * @property int|null $cogs_gl_acc_id
 */
class GlAccountMap extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_account_map';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'cos_id', 'item_id', 'sales_gl_acc_id', 'sales_disc_gl_acc_id', 'inventory_gl_acc_id', 'cogs_gl_acc_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sub_unit_id' => 'Sub Unit ID',
            'cos_id' => 'Cos ID',
            'item_id' => 'Item ID',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'sales_disc_gl_acc_id' => 'Sales Disc Gl Acc ID',
            'inventory_gl_acc_id' => 'Inventory Gl Acc ID',
            'cogs_gl_acc_id' => 'Cogs Gl Acc ID',
        ];
    }
}
