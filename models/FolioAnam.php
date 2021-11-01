<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_anam".
 *
 * @property int $folio_id
 * @property int $seq
 * @property string|null $description
 * @property string|null $file_name
 * @property string|null $attachment
 *
 * @property Folio $folio
 */
class FolioAnam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_anam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq'], 'integer'],
            [['attachment'], 'string'],
            [['description', 'file_name'], 'string', 'max' => 50],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
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
            'seq' => 'Seq',
            'description' => 'Description',
            'file_name' => 'File Name',
            'attachment' => 'Attachment',
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
