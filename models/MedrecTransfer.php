<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medrec_transfer".
 *
 * @property int $mr_transfer_id
 * @property string|null $mr_transfer_no
 * @property string|null $mr_transfer_date
 * @property int|null $from_location_id
 * @property int|null $to_location_id
 * @property int|null $sent_user_id
 * @property int|null $received_user_id
 * @property string|null $description
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class MedrecTransfer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medrec_transfer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_transfer_id'], 'required'],
            [['mr_transfer_id', 'from_location_id', 'to_location_id', 'sent_user_id', 'received_user_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['mr_transfer_date', 'created_time', 'modified_time'], 'safe'],
            [['mr_transfer_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 50],
            [['mr_transfer_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mr_transfer_id' => 'Mr Transfer ID',
            'mr_transfer_no' => 'Mr Transfer No',
            'mr_transfer_date' => 'Mr Transfer Date',
            'from_location_id' => 'From Location ID',
            'to_location_id' => 'To Location ID',
            'sent_user_id' => 'Sent User ID',
            'received_user_id' => 'Received User ID',
            'description' => 'Description',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
