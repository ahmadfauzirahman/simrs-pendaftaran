<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_dist".
 *
 * @property int $item_id
 * @property int $seq
 * @property string|null $description
 * @property int|null $staff_id
 * @property int|null $account_id
 * @property float|null $dist_pc
 * @property float|null $dist_num
 * @property float|null $dist_denum
 *
 * @property Staff $staff
 * @property GlAccount $account
 * @property Item $item
 */
class ItemDist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_dist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'seq'], 'required'],
            [['item_id', 'seq', 'staff_id', 'account_id'], 'integer'],
            [['dist_pc', 'dist_num', 'dist_denum'], 'number'],
            [['description'], 'string', 'max' => 50],
            [['item_id', 'seq'], 'unique', 'targetAttribute' => ['item_id', 'seq']],
            [['staff_id'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_id' => 'staff_id']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['account_id' => 'account_id']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'seq' => 'Seq',
            'description' => 'Description',
            'staff_id' => 'Staff ID',
            'account_id' => 'Account ID',
            'dist_pc' => 'Dist Pc',
            'dist_num' => 'Dist Num',
            'dist_denum' => 'Dist Denum',
        ];
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'staff_id']);
    }

    /**
     * Gets query for [[Account]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'account_id']);
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
}
