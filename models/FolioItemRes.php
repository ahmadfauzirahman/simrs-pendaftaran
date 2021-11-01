<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_item_res".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int $resource_id
 * @property float|null $hours_ordered
 * @property string|null $task
 *
 * @property Folio $folio
 * @property Resource $resource
 */
class FolioItemRes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_item_res';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'resource_id'], 'required'],
            [['folio_id', 'seq', 'resource_id'], 'integer'],
            [['hours_ordered'], 'number'],
            [['task'], 'string', 'max' => 50],
            [['folio_id', 'seq', 'resource_id'], 'unique', 'targetAttribute' => ['folio_id', 'seq', 'resource_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['resource_id'], 'exist', 'skipOnError' => true, 'targetClass' => Resource::className(), 'targetAttribute' => ['resource_id' => 'resource_id']],
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
            'resource_id' => 'Resource ID',
            'hours_ordered' => 'Hours Ordered',
            'task' => 'Task',
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
     * Gets query for [[Resource]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResource()
    {
        return $this->hasOne(Resource::className(), ['resource_id' => 'resource_id']);
    }
}
