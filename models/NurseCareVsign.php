<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_care_vsign".
 *
 * @property int $folio_id
 * @property int $seq
 * @property string|null $entry_date
 * @property string $param_name
 * @property string|null $param_value
 * @property string|null $notes
 * @property int|null $user_id
 * @property int|null $deleted
 * @property int|null $status
 * @property int|null $nurse_care_param_id
 *
 * @property ScrtUser $user
 * @property Folio $folio
 */
class NurseCareVsign extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nurse_care_vsign';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'param_name'], 'required'],
            [['folio_id', 'seq', 'user_id', 'deleted', 'status', 'nurse_care_param_id'], 'integer'],
            [['entry_date'], 'safe'],
            [['param_name'], 'string', 'max' => 30],
            [['param_value', 'notes'], 'string', 'max' => 100],
            [['folio_id', 'seq', 'param_name'], 'unique', 'targetAttribute' => ['folio_id', 'seq', 'param_name']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
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
            'entry_date' => 'Entry Date',
            'param_name' => 'Param Name',
            'param_value' => 'Param Value',
            'notes' => 'Notes',
            'user_id' => 'User ID',
            'deleted' => 'Deleted',
            'status' => 'Status',
            'nurse_care_param_id' => 'Nurse Care Param ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_id']);
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
