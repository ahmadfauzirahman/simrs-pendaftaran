<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_proc".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $intern_proc_id
 * @property int|null $icd_id
 * @property int|null $created_by
 * @property string|null $created_time
 * @property int|null $modified_by
 * @property string|null $modified_time
 * @property int|null $validated_by
 * @property string|null $validated_time
 * @property int|null $deleted_by
 * @property string|null $deleted_time
 *
 * @property Folio $folio
 * @property Icd $icd
 */
class FolioProc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_proc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'intern_proc_id', 'icd_id', 'created_by', 'modified_by', 'validated_by', 'deleted_by'], 'integer'],
            [['created_time', 'modified_time', 'validated_time', 'deleted_time'], 'safe'],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['icd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Icd::className(), 'targetAttribute' => ['icd_id' => 'icd_id']],
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
            'intern_proc_id' => 'Intern Proc ID',
            'icd_id' => 'Icd ID',
            'created_by' => 'Created By',
            'created_time' => 'Created Time',
            'modified_by' => 'Modified By',
            'modified_time' => 'Modified Time',
            'validated_by' => 'Validated By',
            'validated_time' => 'Validated Time',
            'deleted_by' => 'Deleted By',
            'deleted_time' => 'Deleted Time',
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
     * Gets query for [[Icd]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIcd()
    {
        return $this->hasOne(Icd::className(), ['icd_id' => 'icd_id']);
    }
}
