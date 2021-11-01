<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_mcu_ext".
 *
 * @property int $item_id
 * @property string|null $item_name
 * @property int|null $disabled
 * @property string|null $created_time
 * @property int|null $created_user_id
 * @property string|null $modified_time
 * @property int|null $modified_user_id
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property PayByItemPriceMcuExt[] $payByItemPriceMcuExts
 * @property PayBy[] $payBies
 */
class ItemMcuExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_mcu_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['item_name'], 'string', 'max' => 50],
            [['item_name'], 'unique'],
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
            'item_id' => 'Item ID',
            'item_name' => 'Item Name',
            'disabled' => 'Disabled',
            'created_time' => 'Created Time',
            'created_user_id' => 'Created User ID',
            'modified_time' => 'Modified Time',
            'modified_user_id' => 'Modified User ID',
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
     * Gets query for [[PayByItemPriceMcuExts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByItemPriceMcuExts()
    {
        return $this->hasMany(PayByItemPriceMcuExt::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[PayBies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['pay_by_id' => 'pay_by_id'])->viaTable('pay_by_item_price_mcu_ext', ['item_id' => 'item_id']);
    }
}
