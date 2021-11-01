<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hk_setup".
 *
 * @property int $company_id
 * @property int|null $subunit_mgt_rpt_cat_id
 *
 * @property ReportCat $subunitMgtRptCat
 * @property Company $company
 */
class HkSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hk_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'subunit_mgt_rpt_cat_id'], 'integer'],
            [['company_id'], 'unique'],
            [['subunit_mgt_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['subunit_mgt_rpt_cat_id' => 'category_id']],
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
            'subunit_mgt_rpt_cat_id' => 'Subunit Mgt Rpt Cat ID',
        ];
    }

    /**
     * Gets query for [[SubunitMgtRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubunitMgtRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'subunit_mgt_rpt_cat_id']);
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
