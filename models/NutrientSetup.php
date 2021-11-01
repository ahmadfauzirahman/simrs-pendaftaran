<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nutrient_setup".
 *
 * @property int $company_id
 * @property int|null $diet_rpt_cat_id
 *
 * @property Company $company
 * @property ReportCat $dietRptCat
 */
class NutrientSetup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nutrient_setup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id'], 'required'],
            [['company_id', 'diet_rpt_cat_id'], 'integer'],
            [['company_id'], 'unique'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'company_id']],
            [['diet_rpt_cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReportCat::className(), 'targetAttribute' => ['diet_rpt_cat_id' => 'category_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'diet_rpt_cat_id' => 'Diet Rpt Cat ID',
        ];
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

    /**
     * Gets query for [[DietRptCat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDietRptCat()
    {
        return $this->hasOne(ReportCat::className(), ['category_id' => 'diet_rpt_cat_id']);
    }
}
