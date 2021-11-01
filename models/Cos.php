<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cos".
 *
 * @property int $cos_id
 * @property string|null $cos_name
 * @property string|null $description
 * @property string|null $refer_cos_name
 * @property string|null $cos_code_bpjs
 * @property string|null $eklaim_cos_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property CosDept[] $cosDepts
 * @property CosItem[] $cosItems
 * @property Item[] $items
 * @property Folio[] $folios
 * @property Folio[] $folios0
 * @property Folio[] $folios1
 * @property ItemCosPrice[] $itemCosPrices
 * @property Item[] $items0
 * @property ItemCosPriceFuture[] $itemCosPriceFutures
 * @property PayBy[] $payBies
 * @property PayByCos[] $payByCos
 */
class Cos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cos_id'], 'required'],
            [['cos_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['cos_name', 'refer_cos_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['cos_code_bpjs'], 'string', 'max' => 5],
            [['eklaim_cos_name'], 'string', 'max' => 10],
            [['cos_id'], 'unique'],
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
            'cos_id' => 'Cos ID',
            'cos_name' => 'Cos Name',
            'description' => 'Description',
            'refer_cos_name' => 'Refer Cos Name',
            'cos_code_bpjs' => 'Cos Code Bpjs',
            'eklaim_cos_name' => 'Eklaim Cos Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
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
     * Gets query for [[CosDepts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosDepts()
    {
        return $this->hasMany(CosDept::className(), ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[CosItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosItems()
    {
        return $this->hasMany(CosItem::className(), ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('cos_item', ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['cos_service_id' => 'cos_id']);
    }

    /**
     * Gets query for [[Folios0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios0()
    {
        return $this->hasMany(Folio::className(), ['cos_requested_id' => 'cos_id']);
    }

    /**
     * Gets query for [[Folios1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios1()
    {
        return $this->hasMany(Folio::className(), ['cos_pay_id' => 'cos_id']);
    }

    /**
     * Gets query for [[ItemCosPrices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemCosPrices()
    {
        return $this->hasMany(ItemCosPrice::className(), ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[Items0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems0()
    {
        return $this->hasMany(Item::className(), ['item_id' => 'item_id'])->viaTable('item_cos_price', ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[ItemCosPriceFutures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemCosPriceFutures()
    {
        return $this->hasMany(ItemCosPriceFuture::className(), ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[PayBies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['cos_id' => 'cos_id']);
    }

    /**
     * Gets query for [[PayByCos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByCos()
    {
        return $this->hasMany(PayByCos::className(), ['cos_id' => 'cos_id']);
    }
}
