<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_journal_type".
 *
 * @property int $journal_type_id
 * @property string|null $type_name
 * @property string|null $description
 * @property int|null $created_user_id
 * @property string $created_time
 * @property int|null $modified_user_id
 * @property string $modified_time
 *
 * @property ApSetup[] $apSetups
 * @property ApSetup[] $apSetups0
 * @property ArSetup[] $arSetups
 * @property ArSetup[] $arSetups0
 * @property AssetSetup[] $assetSetups
 * @property BankSetup[] $bankSetups
 * @property Department[] $departments
 * @property GlJournal[] $glJournals
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlJtemplate[] $glJtemplates
 * @property InvSetup[] $invSetups
 * @property MfgSetup[] $mfgSetups
 * @property NInvSetup[] $nInvSetups
 * @property Unit[] $units
 */
class GlJournalType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_journal_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['type_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 100],
            [['type_name'], 'unique'],
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
            'journal_type_id' => 'Journal Type ID',
            'type_name' => 'Type Name',
            'description' => 'Description',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[ApSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApSetups()
    {
        return $this->hasMany(ApSetup::className(), ['ap_inv_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[ApSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApSetups0()
    {
        return $this->hasMany(ApSetup::className(), ['ap_pmt_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[ArSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups()
    {
        return $this->hasMany(ArSetup::className(), ['ar_inv_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[ArSetups0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArSetups0()
    {
        return $this->hasMany(ArSetup::className(), ['ar_pmt_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[AssetSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAssetSetups()
    {
        return $this->hasMany(AssetSetup::className(), ['asset_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[BankSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankSetups()
    {
        return $this->hasMany(BankSetup::className(), ['bank_journal_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[GlJournals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournals()
    {
        return $this->hasMany(GlJournal::className(), ['journal_type_id' => 'journal_type_id']);
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
     * Gets query for [[GlJtemplates]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtemplates()
    {
        return $this->hasMany(GlJtemplate::className(), ['journal_type_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[InvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvSetups()
    {
        return $this->hasMany(InvSetup::className(), ['adj_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[MfgSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfgSetups()
    {
        return $this->hasMany(MfgSetup::className(), ['mreceipt_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[NInvSetups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNInvSetups()
    {
        return $this->hasMany(NInvSetup::className(), ['adj_gl_jtype_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[Units]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['gl_jtype_id' => 'journal_type_id']);
    }
}
