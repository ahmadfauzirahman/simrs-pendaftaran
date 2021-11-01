<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_consent".
 *
 * @property int|null $folio_id
 * @property int|null $seq
 * @property string|null $description
 * @property string|null $file_name
 * @property resource|null $attachment
 * @property int|null $posted
 */
class FolioConsent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_consent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'posted'], 'integer'],
            [['attachment'], 'string'],
            [['description'], 'string', 'max' => 50],
            [['file_name'], 'string', 'max' => 100],
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
            'posted' => 'Posted',
        ];
    }
}
