<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_mv".
 *
 * @property int $mv_id
 * @property string|null $mv_no
 * @property string|null $mv_date
 * @property int|null $mv_type
 * @property int|null $posted
 * @property string|null $person_in_charge
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $asset_id
 * @property int|null $warehouse_id
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Asset $asset
 * @property Warehouse $warehouse
 */
class AssetMv extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_mv';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mv_id'], 'required'],
            [['mv_id', 'mv_type', 'posted', 'created_user_id', 'modified_user_id', 'asset_id', 'warehouse_id'], 'integer'],
            [['mv_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['mv_no'], 'string', 'max' => 20],
            [['person_in_charge'], 'string', 'max' => 30],
            [['mv_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['asset_id'], 'exist', 'skipOnError' => true, 'targetClass' => Asset::className(), 'targetAttribute' => ['asset_id' => 'asset_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mv_id' => 'Mv ID',
            'mv_no' => 'Mv No',
            'mv_date' => 'Mv Date',
            'mv_type' => 'Mv Type',
            'posted' => 'Posted',
            'person_in_charge' => 'Person In Charge',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'asset_id' => 'Asset ID',
            'warehouse_id' => 'Warehouse ID',
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
     * Gets query for [[Asset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsset()
    {
        return $this->hasOne(Asset::className(), ['asset_id' => 'asset_id']);
    }

    /**
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }
}
