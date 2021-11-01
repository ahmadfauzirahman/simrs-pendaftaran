<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_pm_xt".
 *
 * @property int $pm_id
 * @property string|null $pm_name
 */
class OkupasiPmXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_pm_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pm_id'], 'required'],
            [['pm_id'], 'integer'],
            [['pm_name'], 'string', 'max' => 100],
            [['pm_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pm_id' => 'Pm ID',
            'pm_name' => 'Pm Name',
        ];
    }
}
