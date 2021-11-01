<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medrec_setup".
 *
 * @property int $company_id
 * @property int|null $medrec_rpt_cat_id
 * @property int|null $default_show_patient
 *
 * @property ReportCat $medrecRptCat
 * @property Company $company
 */
class MedrecSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medrec_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'medrec_rpt_cat_id', 'default_show_patient'], 'integer'],
            [['company_id'], 'unique'],
            [['medrec_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['medrec_rpt_cat_id' => 'category_id']],
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
            'medrec_rpt_cat_id' => 'Medrec Rpt Cat ID',
            'default_show_patient' => 'Default Show Patient',
        ];
    }

    /**
     * Gets query for [[MedrecRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedrecRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'medrec_rpt_cat_id']);
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
