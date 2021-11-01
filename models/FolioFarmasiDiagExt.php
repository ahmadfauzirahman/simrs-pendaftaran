<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_farmasi_diag_ext".
 *
 * @property int $folio_id
 * @property string|null $diagnosa
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property Folio $folio
 */
class FolioFarmasiDiagExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_farmasi_diag_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id'], 'required'],
            [['folio_id', 'created_user_id'], 'integer'],
            [['diagnosa'], 'string'],
            [['created_time'], 'safe'],
            [['folio_id'], 'unique'],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'diagnosa' => 'Diagnosa',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
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
