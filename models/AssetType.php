<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_type".
 *
 * @property int $asset_type_id
 * @property string|null $type_name
 * @property int|null $asset_char
 * @property int|null $asset_gl_acc_id
 * @property int|null $dep_gl_acc_id
 * @property int|null $accdep_gl_acc_id
 * @property int|null $disposal_gl_acc_id
 * @property int|null $sales_gl_acc_id
 * @property int|null $dep_method
 * @property int|null $lite_time
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Asset[] $assets
 * @property GlAccount $assetGlAcc
 * @property GlAccount $depGlAcc
 * @property GlAccount $accdepGlAcc
 * @property GlAccount $disposalGlAcc
 * @property GlAccount $salesGlAcc
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class AssetType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_char', 'asset_gl_acc_id', 'dep_gl_acc_id', 'accdep_gl_acc_id', 'disposal_gl_acc_id', 'sales_gl_acc_id', 'dep_method', 'lite_time', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['type_name'], 'string', 'max' => 30],
            [['asset_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['asset_gl_acc_id' => 'account_id']],
            [['dep_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['dep_gl_acc_id' => 'account_id']],
            [['accdep_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['accdep_gl_acc_id' => 'account_id']],
            [['disposal_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['disposal_gl_acc_id' => 'account_id']],
            [['sales_gl_acc_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['sales_gl_acc_id' => 'account_id']],
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
            'asset_type_id' => 'Asset Type ID',
            'type_name' => 'Type Name',
            'asset_char' => 'Asset Char',
            'asset_gl_acc_id' => 'Asset Gl Acc ID',
            'dep_gl_acc_id' => 'Dep Gl Acc ID',
            'accdep_gl_acc_id' => 'Accdep Gl Acc ID',
            'disposal_gl_acc_id' => 'Disposal Gl Acc ID',
            'sales_gl_acc_id' => 'Sales Gl Acc ID',
            'dep_method' => 'Dep Method',
            'lite_time' => 'Lite Time',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Assets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssets()
    {
        return $this->hasMany(Asset::className(), ['asset_type_id' => 'asset_type_id']);
    }

    /**
     * Gets query for [[AssetGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'asset_gl_acc_id']);
    }

    /**
     * Gets query for [[DepGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'dep_gl_acc_id']);
    }

    /**
     * Gets query for [[AccdepGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccdepGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'accdep_gl_acc_id']);
    }

    /**
     * Gets query for [[DisposalGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDisposalGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'disposal_gl_acc_id']);
    }

    /**
     * Gets query for [[SalesGlAcc]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSalesGlAcc()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'sales_gl_acc_id']);
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
}
