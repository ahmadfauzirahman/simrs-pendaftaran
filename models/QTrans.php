<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "q_trans".
 *
 * @property int $q_trans_id
 * @property string|null $q_trans_date
 * @property int|null $folio_id
 * @property string|null $q_number
 * @property int|null $q_server_id
 * @property int|null $status
 *
 * @property Folio $folio
 */
class QTrans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'q_trans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['q_trans_date'], 'safe'],
            [['folio_id', 'q_server_id', 'status'], 'integer'],
            [['q_number'], 'string', 'max' => 10],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
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
            'q_server_id' => 'Q Server ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Folio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolio()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'folio_id']);
    }
}
