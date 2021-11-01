<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mfg_setup".
 *
 * @property int $company_id
 * @property int|null $mreceipt_gl_jtype_id
 * @property int|null $morder_rpt_cat_id
 * @property int|null $mreceipt_rpt_cat_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property GlJournalType $mreceiptGlJtype
 * @property ReportCat $morderRptCat
 * @property ReportCat $mreceiptRptCat
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class MfgSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfg_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'mreceipt_gl_jtype_id', 'morder_rpt_cat_id', 'mreceipt_rpt_cat_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['company_id'], 'unique'],
            [['mreceipt_gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['mreceipt_gl_jtype_id' => 'journal_type_id']],
            [['morder_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['morder_rpt_cat_id' => 'category_id']],
            [['mreceipt_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['mreceipt_rpt_cat_id' => 'category_id']],
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
            'company_id' => 'Company ID',
            'mreceipt_gl_jtype_id' => 'Mreceipt Gl Jtype ID',
            'morder_rpt_cat_id' => 'Morder Rpt Cat ID',
            'mreceipt_rpt_cat_id' => 'Mreceipt Rpt Cat ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[MreceiptGlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'mreceipt_gl_jtype_id']);
    }

    /**
     * Gets query for [[MorderRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMorderRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'morder_rpt_cat_id']);
    }

    /**
     * Gets query for [[MreceiptRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMreceiptRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'mreceipt_rpt_cat_id']);
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
