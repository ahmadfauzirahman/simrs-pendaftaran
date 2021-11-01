<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "q_trans2".
 *
 * @property int $q_trans_id
 * @property string|null $q_trans_date
 * @property int|null $folio_id
 * @property string|null $q_number
 * @property int|null $q_server_id
 * @property int|null $status
 */
class QTrans2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'q_trans2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_trans_id'], 'required'],
            [['q_trans_id', 'folio_id', 'q_server_id', 'status'], 'integer'],
            [['q_trans_date'], 'safe'],
            [['q_number'], 'string', 'max' => 10],
            [['q_trans_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'q_trans_id' => 'Q Trans ID',
            'q_trans_date' => 'Q Trans Date',
            'folio_id' => 'Folio ID',
            'q_number' => 'Q Number',
            'q_server_id' => 'Q Server ID',
            'status' => 'Status',
        ];
    }
}
