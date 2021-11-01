<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_diet".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $diet_id
 * @property string|null $description
 *
 * @property Folio $folio
 * @property Diet $diet
 */
class FolioDiet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_diet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'diet_id'], 'integer'],
            [['description'], 'string', 'max' => 50],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['diet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Diet::className(), 'targetAttribute' => ['diet_id' => 'diet_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'seq' => 'Seq',
            'diet_id' => 'Diet ID',
            'description' => 'Description',
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

    /**
     * Gets query for [[Diet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiet()
    {
        return $this->hasOne(Diet::className(), ['diet_id' => 'diet_id']);
    }
}
