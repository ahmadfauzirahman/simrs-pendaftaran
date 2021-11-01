<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_adj".
 *
 * @property int $adjustment_id
 * @property string|null $adjustment_no
 * @property string|null $adjustment_request_date
 * @property string|null $adjustment_date
 * @property int|null $warehouse_id
 * @property int|null $adjustment_type
 * @property int|null $location_id
 * @property int|null $adj_account_id
 * @property string|null $requested_by
 * @property string|null $description
 * @property int|null $approved
 * @property int|null $posted
 * @property int|null $gl_period
 * @property int|null $gl_year
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Warehouse $warehouse
 * @property InvAdjAccount $adjAccount
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property InvAdjDet[] $invAdjDets
 */
class InvAdj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_adj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adjustment_request_date', 'adjustment_date', 'created_time', 'modified_time'], 'safe'],
            [['warehouse_id', 'adjustment_type', 'location_id', 'adj_account_id', 'approved', 'posted', 'gl_period', 'gl_year', 'created_user_id', 'modified_user_id'], 'integer'],
            [['adjustment_no'], 'string', 'max' => 20],
            [['requested_by'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 100],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
            [['adj_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvAdjAccount::className(), 'targetAttribute' => ['adj_account_id' => 'account_id']],
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
            'adjustment_id' => 'Adjustment ID',
            'adjustment_no' => 'Adjustment No',
            'adjustment_request_date' => 'Adjustment Request Date',
            'adjustment_date' => 'Adjustment Date',
            'warehouse_id' => 'Warehouse ID',
            'adjustment_type' => 'Adjustment Type',
            'location_id' => 'Location ID',
            'adj_account_id' => 'Adj Account ID',
            'requested_by' => 'Requested By',
            'description' => 'Description',
            'approved' => 'Approved',
            'posted' => 'Posted',
            'gl_period' => 'Gl Period',
            'gl_year' => 'Gl Year',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
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

    /**
     * Gets query for [[AdjAccount]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdjAccount()
    {
        return $this->hasOne(InvAdjAccount::className(), ['account_id' => 'adj_account_id']);
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
     * Gets query for [[InvAdjDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvAdjDets()
    {
        return $this->hasMany(InvAdjDet::className(), ['adjustment_id' => 'adjustment_id']);
    }
}
