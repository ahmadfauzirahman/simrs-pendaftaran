<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_verifikator_lab_xt".
 *
 * @property int $fol_id
 * @property string|null $date_post
 * @property int|null $created_user_id
 *
 * @property Folio $fol
 */
class FolioVerifikatorLabXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_verifikator_lab_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fol_id'], 'required'],
            [['fol_id', 'created_user_id'], 'integer'],
            [['date_post'], 'safe'],
            [['fol_id'], 'unique'],
            [['fol_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['fol_id' => 'folio_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fol_id' => 'Fol ID',
            'date_post' => 'Date Post',
            'created_user_id' => 'Created User ID',
        ];
    }

    /**
     * Gets query for [[Fol]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFol()
    {
        return $this->hasOne(Folio::className(), ['folio_id' => 'fol_id']);
    }
}
