<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bank_xt".
 *
 * @property int $bank_id
 * @property string|null $bank_name
 *
 * @property PicCustomer[] $picCustomers
 */
class BankXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bank_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bank_name'], 'string', 'max' => 50],
            [['bank_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bank_id' => 'Bank ID',
            'bank_name' => 'Bank Name',
        ];
    }

    /**
     * Gets query for [[PicCustomers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPicCustomers()
    {
        return $this->hasMany(PicCustomer::className(), ['bank_id' => 'bank_id']);
    }
}
