<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_diag".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $intern_diag_id
 * @property int|null $icd_id
 * @property int|null $diag_type_id
 * @property string $created_time
 * @property int $created_by
 * @property string|null $validated_time
 * @property int|null $validated_by
 * @property string|null $modified_time
 * @property int|null $modified_by
 * @property string|null $deleted_time
 * @property int|null $deleted_by
 *
 * @property Icd $icd
 * @property Folio $folio
 */
class FolioDiag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_diag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'intern_diag_id', 'icd_id', 'diag_type_id', 'created_by', 'validated_by', 'modified_by', 'deleted_by'], 'integer'],
            [['created_time', 'validated_time', 'modified_time', 'deleted_time'], 'safe'],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['icd_id'], 'exist', 'skipOnError' => true, 'targetClass' => Icd::className(), 'targetAttribute' => ['icd_id' => 'icd_id']],
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
            'intern_diag_id' => 'Intern Diag ID',
            'icd_id' => 'Icd ID',
            'diag_type_id' => 'Diag Type ID',
            'created_time' => 'Created Time',
            'created_by' => 'Created By',
            'validated_time' => 'Validated Time',
            'validated_by' => 'Validated By',
            'modified_time' => 'Modified Time',
            'modified_by' => 'Modified By',
            'deleted_time' => 'Deleted Time',
            'deleted_by' => 'Deleted By',
        ];
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
