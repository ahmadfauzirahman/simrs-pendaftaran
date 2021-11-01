<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_balance_ext".
 *
 * @property int $gl_id
 * @property int|null $account_id
 * @property string|null $gl_year
 * @property float|null $opening_balance
 * @property float|null $balance
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class GlBalanceExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_balance_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gl_id'], 'required'],
            [['gl_id', 'account_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['gl_year', 'created_time', 'modified_time'], 'safe'],
            [['opening_balance', 'balance'], 'number'],
            [['gl_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gl_id' => 'Gl ID',
            'account_id' => 'Account ID',
            'gl_year' => 'Gl Year',
            'opening_balance' => 'Opening Balance',
            'balance' => 'Balance',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
