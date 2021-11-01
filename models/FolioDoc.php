<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_doc".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $doc_id
 * @property string|null $file_name
 * @property resource|null $attachment
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $validated_user_id
 * @property string|null $validated_time
 * @property int|null $deleted_user_id
 * @property string|null $deleted_time
 */
class FolioDoc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_doc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'doc_id', 'posted', 'created_user_id', 'modified_user_id', 'validated_user_id', 'deleted_user_id'], 'integer'],
            [['attachment'], 'string'],
            [['created_time', 'modified_time', 'validated_time', 'deleted_time'], 'safe'],
            [['file_name'], 'string', 'max' => 100],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
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
            'doc_id' => 'Doc ID',
            'file_name' => 'File Name',
            'attachment' => 'Attachment',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'validated_user_id' => 'Validated User ID',
            'validated_time' => 'Validated Time',
            'deleted_user_id' => 'Deleted User ID',
            'deleted_time' => 'Deleted Time',
        ];
    }
}
