<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cur_his_tax".
 *
 * @property int $currency_id
 * @property int $seq
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property float|null $rate
 *
 * @property ScrtUser $modifiedUser
 * @property Currency $currency
 */
class CurHisTax extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cur_his_tax';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['currency_id', 'seq'], 'required'],
            [['currency_id', 'seq', 'modified_user_id'], 'integer'],
            [['modified_time'], 'safe'],
            [['rate'], 'number'],
            [['currency_id', 'seq'], 'unique', 'targetAttribute' => ['currency_id', 'seq']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['currency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Currency::className(), 'targetAttribute' => ['currency_id' => 'currency_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'currency_id' => 'Currency ID',
            'seq' => 'Seq',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'rate' => 'Rate',
        ];
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

    /**
     * Gets query for [[Currency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurrency()
    {
        return $this->hasOne(Currency::className(), ['currency_id' => 'currency_id']);
    }
}
