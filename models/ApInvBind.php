<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ap_inv_bind".
 *
 * @property int $bind_id
 * @property string|null $bind_no
 * @property string|null $bind_date
 * @property string|null $vendor_reference
 * @property int|null $vendor_id
 * @property string|null $return_date
 * @property string|null $notes
 * @property int|null $posted
 * @property int|null $printed
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Vendor $vendor
 * @property ApInvBindDet[] $apInvBindDets
 */
class ApInvBind extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ap_inv_bind';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bind_id'], 'required'],
            [['bind_id', 'vendor_id', 'posted', 'printed', 'created_user_id', 'modified_user_id'], 'integer'],
            [['bind_date', 'return_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['bind_no'], 'string', 'max' => 20],
            [['vendor_reference'], 'string', 'max' => 30],
            [['bind_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['vendor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vendor::className(), 'targetAttribute' => ['vendor_id' => 'vendor_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bind_id' => 'Bind ID',
            'bind_no' => 'Bind No',
            'bind_date' => 'Bind Date',
            'vendor_reference' => 'Vendor Reference',
            'vendor_id' => 'Vendor ID',
            'return_date' => 'Return Date',
            'notes' => 'Notes',
            'posted' => 'Posted',
            'printed' => 'Printed',
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
     * Gets query for [[Vendor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVendor()
    {
        return $this->hasOne(Vendor::className(), ['vendor_id' => 'vendor_id']);
    }

    /**
     * Gets query for [[ApInvBindDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApInvBindDets()
    {
        return $this->hasMany(ApInvBindDet::className(), ['bind_id' => 'bind_id']);
    }
}
