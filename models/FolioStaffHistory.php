<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_staff_history".
 *
 * @property int $history_id
 * @property int $folio_id
 * @property int|null $staff_id
 * @property string|null $staff_change_time
 * @property int|null $change_type
 *
 * @property Folio $folio
 */
class FolioStaffHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_staff_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id'], 'required'],
            [['folio_id', 'staff_id', 'change_type'], 'integer'],
            [['staff_change_time'], 'safe'],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'history_id' => 'History ID',
            'folio_id' => 'Folio ID',
            'staff_id' => 'Staff ID',
            'staff_change_time' => 'Staff Change Time',
            'change_type' => 'Change Type',
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
