<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inv_count".
 *
 * @property int $count_id
 * @property string|null $count_no
 * @property string|null $count_date
 * @property int|null $warehouse_id
 * @property string|null $description
 * @property string|null $counted_by
 * @property int|null $posted
 * @property int|null $adjust_in_acc_id
 * @property int|null $adjust_out_acc_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $gl_period
 * @property int|null $gl_year
 *
 * @property InvAdjAccount $adjustInAcc
 * @property InvAdjAccount $adjustOutAcc
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Warehouse $warehouse
 * @property InvCountDet[] $invCountDets
 * @property InvCountDetEdXt[] $invCountDetEdXts
 */
class InvCount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inv_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['count_id'], 'required'],
            [['count_id', 'warehouse_id', 'posted', 'adjust_in_acc_id', 'adjust_out_acc_id', 'created_user_id', 'modified_user_id', 'gl_period', 'gl_year'], 'integer'],
            [['count_date', 'created_time', 'modified_time'], 'safe'],
            [['count_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
            [['counted_by'], 'string', 'max' => 30],
            [['count_id'], 'unique'],
            [['adjust_in_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvAdjAccount::className(), 'targetAttribute' => ['adjust_in_acc_id' => 'account_id']],
            [['adjust_out_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => InvAdjAccount::className(), 'targetAttribute' => ['adjust_out_acc_id' => 'account_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'warehouse_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'count_id' => 'Count ID',
            'count_no' => 'Count No',
            'count_date' => 'Count Date',
            'warehouse_id' => 'Warehouse ID',
            'description' => 'Description',
            'counted_by' => 'Counted By',
            'posted' => 'Posted',
            'adjust_in_acc_id' => 'Adjust In Acc ID',
            'adjust_out_acc_id' => 'Adjust Out Acc ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'gl_period' => 'Gl Period',
            'gl_year' => 'Gl Year',
        ];
    }

    /**
     * Gets query for [[AdjustInAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdjustInAcc()
    {
        return $this->hasOne(InvAdjAccount::className(), ['account_id' => 'adjust_in_acc_id']);
    }

    /**
     * Gets query for [[AdjustOutAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAdjustOutAcc()
    {
        return $this->hasOne(InvAdjAccount::className(), ['account_id' => 'adjust_out_acc_id']);
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
     * Gets query for [[Warehouse]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['warehouse_id' => 'warehouse_id']);
    }

    /**
     * Gets query for [[InvCountDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvCountDets()
    {
        return $this->hasMany(InvCountDet::className(), ['count_id' => 'count_id']);
    }

    /**
     * Gets query for [[InvCountDetEdXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvCountDetEdXts()
    {
        return $this->hasMany(InvCountDetEdXt::className(), ['count_id' => 'count_id']);
    }
}
