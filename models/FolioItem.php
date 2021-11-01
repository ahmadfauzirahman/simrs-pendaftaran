<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_item".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int $item_id
 * @property float|null $quantity
 * @property float|null $unit_price
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property string|null $remark
 * @property string|null $other_remark
 * @property float|null $self_amount
 * @property float|null $pay_by_amount
 * @property int|null $compulsory
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property float|null $tax1_amount
 * @property float|null $tax2_amount
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property float|null $add_discount
 * @property string|null $dosage
 * @property int|null $staff_id
 *
 * @property Item $item
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Folio $folio
 */
class FolioItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'item_id'], 'required'],
            [['folio_id', 'seq', 'item_id', 'compulsory', 'posted', 'created_user_id', 'modified_user_id', 'staff_id'], 'integer'],
            [['quantity', 'unit_price', 'disc_pc', 'disc_amount', 'self_amount', 'pay_by_amount', 'uom_conversion', 'tax1_amount', 'tax2_amount', 'add_discount'], 'number'],
            [['created_time', 'modified_time'], 'safe'],
            [['remark', 'dosage'], 'string', 'max' => 50],
            [['other_remark'], 'string', 'max' => 150],
            [['uom'], 'string', 'max' => 5],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'seq' => 'Seq',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'unit_price' => 'Unit Price',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'remark' => 'Remark',
            'other_remark' => 'Other Remark',
            'self_amount' => 'Self Amount',
            'pay_by_amount' => 'Pay By Amount',
            'compulsory' => 'Compulsory',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'tax1_amount' => 'Tax1 Amount',
            'tax2_amount' => 'Tax2 Amount',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'add_discount' => 'Add Discount',
            'dosage' => 'Dosage',
            'staff_id' => 'Staff ID',
        ];
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
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
    }
}
