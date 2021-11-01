<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_jschedule_det".
 *
 * @property int $jschedule_id
 * @property int $seq
 * @property int|null $account_id
 * @property int|null $location_id
 * @property int|null $currency_id
 * @property string|null $description
 * @property float|null $amount
 *
 * @property GlAccount $account
 * @property GlJschedule $jschedule
 */
class GlJscheduleDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_jschedule_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jschedule_id', 'seq'], 'required'],
            [['jschedule_id', 'seq', 'account_id', 'location_id', 'currency_id'], 'integer'],
            [['amount'], 'number'],
            [['description'], 'string', 'max' => 200],
            [['jschedule_id', 'seq'], 'unique', 'targetAttribute' => ['jschedule_id', 'seq']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['account_id' => 'account_id']],
            [['jschedule_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJschedule::className(), 'targetAttribute' => ['jschedule_id' => 'jschedule_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jschedule_id' => 'Jschedule ID',
            'seq' => 'Seq',
            'account_id' => 'Account ID',
            'location_id' => 'Location ID',
            'currency_id' => 'Currency ID',
            'description' => 'Description',
            'amount' => 'Amount',
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

    /**
     * Gets query for [[Jschedule]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJschedule()
    {
        return $this->hasOne(GlJschedule::className(), ['jschedule_id' => 'jschedule_id']);
    }
}
