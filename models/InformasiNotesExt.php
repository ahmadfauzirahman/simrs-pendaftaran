<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "informasi_notes_ext".
 *
 * @property int $informasi_id
 * @property string|null $informasi_no
 * @property string|null $informasi_date
 * @property int|null $warehouse_id
 * @property string|null $notes
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $validasi_unit
 * @property int|null $posted
 *
 * @property InformasiNotesExtDet[] $informasiNotesExtDets
 */
class InformasiNotesExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'informasi_notes_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['informasi_id'], 'required'],
            [['informasi_id', 'warehouse_id', 'created_user_id', 'modified_user_id', 'validasi_unit', 'posted'], 'integer'],
            [['informasi_date', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['informasi_no'], 'string', 'max' => 20],
            [['informasi_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'informasi_id' => 'Informasi ID',
            'informasi_no' => 'Informasi No',
            'informasi_date' => 'Informasi Date',
            'warehouse_id' => 'Warehouse ID',
            'notes' => 'Notes',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'validasi_unit' => 'Validasi Unit',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[InformasiNotesExtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInformasiNotesExtDets()
    {
        return $this->hasMany(InformasiNotesExtDet::className(), ['informasi_id' => 'informasi_id']);
    }
}
