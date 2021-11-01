<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_setup".
 *
 * @property int $company_id
 * @property int|null $asset_gl_jtype_id
 * @property int|null $asset_mv_rpt_cat_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property GlJournalType $assetGlJtype
 * @property ReportCat $assetMvRptCat
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Company $company
 */
class AssetSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'asset_gl_jtype_id', 'asset_mv_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['asset_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['asset_gl_jtype_id' => 'journal_type_id']],
            [['asset_mv_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['asset_mv_rpt_cat_id' => 'category_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'asset_gl_jtype_id' => 'Asset Gl Jtype ID',
            'asset_mv_rpt_cat_id' => 'Asset Mv Rpt Cat ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[AssetGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'asset_gl_jtype_id']);
    }

    /**
     * Gets query for [[AssetMvRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetMvRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'asset_mv_rpt_cat_id']);
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
     * Gets query for [[Company]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['company_id' => 'company_id']);
    }
}
