<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_setup".
 *
 * @property int $company_id
 * @property int|null $default_show_journal
 * @property int|null $bank_journal_gl_jtype_id
 * @property int|null $bank_journal_rpt_cat_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property GlJournalType $bankJournalGlJtype
 * @property ReportCat $bankJournalRptCat
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Company $company
 */
class BankSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'default_show_journal', 'bank_journal_gl_jtype_id', 'bank_journal_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['bank_journal_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['bank_journal_gl_jtype_id' => 'journal_type_id']],
            [['bank_journal_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['bank_journal_rpt_cat_id' => 'category_id']],
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
            'default_show_journal' => 'Default Show Journal',
            'bank_journal_gl_jtype_id' => 'Bank Journal Gl Jtype ID',
            'bank_journal_rpt_cat_id' => 'Bank Journal Rpt Cat ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[BankJournalGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournalGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'bank_journal_gl_jtype_id']);
    }

    /**
     * Gets query for [[BankJournalRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBankJournalRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'bank_journal_rpt_cat_id']);
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
