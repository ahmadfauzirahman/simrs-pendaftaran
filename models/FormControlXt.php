<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form_control_xt".
 *
 * @property int $control_id
 * @property string|null $control_no
 * @property string|null $form_date
 * @property string|null $control_date
 * @property int|null $folio_id
 * @property string|null $diagnosa
 * @property string|null $therapi
 * @property string|null $alasan
 * @property int|null $unit_id
 * @property string|null $time_dokter
 * @property int|null $posted
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property Folio $folio
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Unit $unit
 */
class FormControlXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'form_control_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['control_id'], 'required'],
            [['control_id', 'folio_id', 'unit_id', 'posted', 'created_user_id', 'modified_user_id'], 'integer'],
            [['form_date', 'control_date', 'time_dokter', 'created_time', 'modified_time'], 'safe'],
            [['therapi', 'alasan'], 'string'],
            [['control_no'], 'string', 'max' => 50],
            [['diagnosa'], 'string', 'max' => 80],
            [['control_id'], 'unique'],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['unit_id'], 'exist', 'skipOnError' => true, 'targetClass' => Unit::className(), 'targetAttribute' => ['unit_id' => 'unit_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'control_id' => 'Control ID',
            'control_no' => 'Control No',
            'form_date' => 'Form Date',
            'control_date' => 'Control Date',
            'folio_id' => 'Folio ID',
            'diagnosa' => 'Diagnosa',
            'therapi' => 'Therapi',
            'alasan' => 'Alasan',
            'unit_id' => 'Unit ID',
            'time_dokter' => 'Time Dokter',
            'posted' => 'Posted',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
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
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }

    /**
     * Gets query for [[ModifiedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModifiedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'modified_user_id']);
    }

    /**
     * Gets query for [[Unit]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnit()
    {
        return $this->hasOne(Unit::className(), ['unit_id' => 'unit_id']);
    }
}
