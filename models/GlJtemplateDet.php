<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_jtemplate_det".
 *
 * @property int $jtemplate_id
 * @property int $seq
 * @property int|null $account_id
 * @property int|null $location_id
 * @property float|null $amount
 * @property string|null $description
 *
 * @property GlAccount $account
 * @property GlJtemplate $jtemplate
 */
class GlJtemplateDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_jtemplate_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jtemplate_id', 'seq'], 'required'],
            [['jtemplate_id', 'seq', 'account_id', 'location_id'], 'integer'],
            [['amount'], 'number'],
            [['description'], 'string', 'max' => 100],
            [['jtemplate_id', 'seq'], 'unique', 'targetAttribute' => ['jtemplate_id', 'seq']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['account_id' => 'account_id']],
            [['jtemplate_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJtemplate::className(), 'targetAttribute' => ['jtemplate_id' => 'jtemplate_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jtemplate_id' => 'Jtemplate ID',
            'seq' => 'Seq',
            'account_id' => 'Account ID',
            'location_id' => 'Location ID',
            'amount' => 'Amount',
            'description' => 'Description',
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
     * Gets query for [[Jtemplate]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJtemplate()
    {
        return $this->hasOne(GlJtemplate::className(), ['jtemplate_id' => 'jtemplate_id']);
    }
}
