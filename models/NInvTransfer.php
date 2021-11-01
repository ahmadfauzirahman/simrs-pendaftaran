<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_transfer".
 *
 * @property int $transfer_id
 * @property string|null $transfer_no
 * @property string|null $transfer_request_date
 * @property string|null $transfer_date
 * @property int|null $source_wh_id
 * @property int|null $destination_wh_id
 * @property int|null $approved
 * @property int|null $posted
 * @property string|null $description
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property NWarehouse $sourceWh
 * @property NWarehouse $destinationWh
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property NInvTransferDet[] $nInvTransferDets
 */
class NInvTransfer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_transfer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transfer_id'], 'required'],
            [['transfer_id', 'source_wh_id', 'destination_wh_id', 'approved', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['transfer_request_date', 'transfer_date', 'created_time', 'modified_time'], 'safe'],
            [['transfer_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 100],
            [['transfer_id'], 'unique'],
            [['source_wh_id'], 'exist', 'skipOnError' => true, 'targetClass' => NWarehouse::className(), 'targetAttribute' => ['source_wh_id' => 'warehouse_id']],
            [['destination_wh_id'], 'exist', 'skipOnError' => true, 'targetClass' => NWarehouse::className(), 'targetAttribute' => ['destination_wh_id' => 'warehouse_id']],
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
            'transfer_id' => 'Transfer ID',
            'transfer_no' => 'Transfer No',
            'transfer_request_date' => 'Transfer Request Date',
            'transfer_date' => 'Transfer Date',
            'source_wh_id' => 'Source Wh ID',
            'destination_wh_id' => 'Destination Wh ID',
            'approved' => 'Approved',
            'posted' => 'Posted',
            'description' => 'Description',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[SourceWh]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSourceWh()
    {
        return $this->hasOne(NWarehouse::className(), ['warehouse_id' => 'source_wh_id']);
    }

    /**
     * Gets query for [[DestinationWh]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDestinationWh()
    {
        return $this->hasOne(NWarehouse::className(), ['warehouse_id' => 'destination_wh_id']);
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
     * Gets query for [[NInvTransferDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvTransferDets()
    {
        return $this->hasMany(NInvTransferDet::className(), ['transfer_id' => 'transfer_id']);
    }
}
