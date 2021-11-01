<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "n_inv_adj_account".
 *
 * @property int $account_id
 * @property string|null $account_name
 * @property int|null $gl_account_id
 * @property int|null $location_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property NInvAdj[] $nInvAdjs
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlAccount $glAccount
 * @property NInvCount[] $nInvCounts
 * @property NInvCount[] $nInvCounts0
 * @property NInvSetup[] $nInvSetups
 * @property NInvSetup[] $nInvSetups0
 */
class NInvAdjAccount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'n_inv_adj_account';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gl_account_id', 'location_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['account_name'], 'string', 'max' => 50],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['gl_account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['gl_account_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'Account ID',
            'account_name' => 'Account Name',
            'gl_account_id' => 'Gl Account ID',
            'location_id' => 'Location ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[NInvAdjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvAdjs()
    {
        return $this->hasMany(NInvAdj::className(), ['adj_account_id' => 'account_id']);
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
     * Gets query for [[GlAccount]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlAccount()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'gl_account_id']);
    }

    /**
     * Gets query for [[NInvCounts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvCounts()
    {
        return $this->hasMany(NInvCount::className(), ['adjust_in_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NInvCounts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvCounts0()
    {
        return $this->hasMany(NInvCount::className(), ['adjust_out_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NInvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups()
    {
        return $this->hasMany(NInvSetup::className(), ['count_adjust_in_acc_id' => 'account_id']);
    }

    /**
     * Gets query for [[NInvSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups0()
    {
        return $this->hasMany(NInvSetup::className(), ['count_adjust_out_acc_id' => 'account_id']);
    }
}
