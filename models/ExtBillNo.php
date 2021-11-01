<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ext_bill_no".
 *
 * @property string $id_bill
 * @property int|null $no_bill
 * @property string|null $name_bill
 */
class ExtBillNo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ext_bill_no';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_bill'], 'required'],
            [['no_bill'], 'integer'],
            [['id_bill', 'name_bill'], 'string', 'max' => 30],
            [['id_bill'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bill' => 'Id Bill',
            'no_bill' => 'No Bill',
            'name_bill' => 'Name Bill',
        ];
    }
}
