<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_therapy_item".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $item_id
 * @property float|null $quantity
 * @property float|null $age_weight
 * @property float|null $total_qty
 * @property int|null $dtd
 * @property string|null $uom
 * @property float|null $uom_conversion
 * @property string|null $remark
 * @property string|null $dosage
 * @property string|null $other_remark
 * @property int|null $iter
 * @property int|null $posted
 * @property int|null $posted_sent
 * @property int|null $deleted_sent
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $deleted_user_id
 * @property string|null $deleted_time
 * @property int|null $validated_by
 * @property string|null $validated_time
 * @property int|null $deleted_by
 *
 * @property Item $item
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Folio $folio
 */
class FolioTherapyItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_therapy_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'item_id', 'dtd', 'iter', 'posted', 'posted_sent', 'deleted_sent', 'created_user_id', 'modified_user_id', 'deleted_user_id', 'validated_by', 'deleted_by'], 'integer'],
            [['quantity', 'age_weight', 'total_qty', 'uom_conversion'], 'number'],
            [['created_time', 'modified_time', 'deleted_time', 'validated_time'], 'safe'],
            [['uom'], 'string', 'max' => 5],
            [['remark'], 'string', 'max' => 50],
            [['dosage'], 'string', 'max' => 30],
            [['other_remark'], 'string', 'max' => 150],
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
            'age_weight' => 'Age Weight',
            'total_qty' => 'Total Qty',
            'dtd' => 'Dtd',
            'uom' => 'Uom',
            'uom_conversion' => 'Uom Conversion',
            'remark' => 'Remark',
            'dosage' => 'Dosage',
            'other_remark' => 'Other Remark',
            'iter' => 'Iter',
            'posted' => 'Posted',
            'posted_sent' => 'Posted Sent',
            'deleted_sent' => 'Deleted Sent',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'deleted_user_id' => 'Deleted User ID',
            'deleted_time' => 'Deleted Time',
            'validated_by' => 'Validated By',
            'validated_time' => 'Validated Time',
            'deleted_by' => 'Deleted By',
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
