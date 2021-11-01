<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visual_setting".
 *
 * @property int $company_id
 * @property int|null $wallpaper_id
 * @property int|null $wp_position
 * @property int|null $wp_random
 * @property int|null $bk_color
 *
 * @property Company $company
 */
class VisualSetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visual_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wallpaper_id', 'wp_position', 'wp_random', 'bk_color'], 'integer'],
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
            'wallpaper_id' => 'Wallpaper ID',
            'wp_position' => 'Wp Position',
            'wp_random' => 'Wp Random',
            'bk_color' => 'Bk Color',
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
}
