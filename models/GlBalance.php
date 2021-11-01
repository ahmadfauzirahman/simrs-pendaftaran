<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_balance".
 *
 * @property int $account_id
 * @property int $location_id
 * @property int $gl_year
 * @property float|null $opening_bal
 * @property float|null $period1
 * @property float|null $period2
 * @property float|null $period3
 * @property float|null $period4
 * @property float|null $period5
 * @property float|null $period6
 * @property float|null $period7
 * @property float|null $period8
 * @property float|null $period9
 * @property float|null $period10
 * @property float|null $period11
 * @property float|null $period12
 *
 * @property GlAccount $account
 */
class GlBalance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_balance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_id', 'location_id', 'gl_year'], 'required'],
            [['account_id', 'location_id', 'gl_year'], 'integer'],
            [['opening_bal', 'period1', 'period2', 'period3', 'period4', 'period5', 'period6', 'period7', 'period8', 'period9', 'period10', 'period11', 'period12'], 'number'],
            [['account_id', 'location_id', 'gl_year'], 'unique', 'targetAttribute' => ['account_id', 'location_id', 'gl_year']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['account_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'account_id' => 'Account ID',
            'location_id' => 'Location ID',
            'gl_year' => 'Gl Year',
            'opening_bal' => 'Opening Bal',
            'period1' => 'Period1',
            'period2' => 'Period2',
            'period3' => 'Period3',
            'period4' => 'Period4',
            'period5' => 'Period5',
            'period6' => 'Period6',
            'period7' => 'Period7',
            'period8' => 'Period8',
            'period9' => 'Period9',
            'period10' => 'period10',
            'period11' => 'Period11',
            'period12' => 'Period12',
        ];
    }

    /**
     * Gets query for [[Account]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'account_id']);
    }
}
