<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_item_auto".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $quantity
 * @property float|null $unit_price
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property float|null $disc_pc
 * @property float|null $disc_amount
 * @property string|null $remark
 * @property float|null $self_amount
 * @property float|null $pay_by_amount
 * @property float|null $tax1_amount
 * @property float|null $tax2_amount
 * @property string|null $last_applied
 * @property string|null $next_expected
 * @property int|null $num_applied
 * @property int|null $num_to_apply
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Item $item
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Folio $folio
 */
class FolioItemAuto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_item_auto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'item_id', 'num_applied', 'num_to_apply', 'created_user_id', 'modified_user_id'], 'integer'],
            [['quantity', 'unit_price', 'uom_conversion', 'disc_pc', 'disc_amount', 'self_amount', 'pay_by_amount', 'tax1_amount', 'tax2_amount'], 'number'],
            [['last_applied', 'next_expected', 'created_time', 'modified_time'], 'safe'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
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
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'disc_pc' => 'Disc Pc',
            'disc_amount' => 'Disc Amount',
            'remark' => 'Remark',
            'self_amount' => 'Self Amount',
            'pay_by_amount' => 'Pay By Amount',
            'tax1_amount' => 'Tax1 Amount',
            'tax2_amount' => 'Tax2 Amount',
            'last_applied' => 'Last Applied',
            'next_expected' => 'Next Expected',
            'num_applied' => 'Num Applied',
            'num_to_apply' => 'Num To Apply',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
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
