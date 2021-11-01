<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_op_ext".
 *
 * @property int $reg_op_id
 * @property int|null $reg_id
 * @property string|null $reg_op_no
 * @property string|null $date_op
 * @property int|null $diag_medis_id
 * @property int|null $tind_medis_id
 * @property int|null $ot_1
 * @property int|null $ot_2
 * @property int|null $ot_3
 * @property int|null $ot_4
 * @property int|null $ot_5
 * @property int|null $ot_6
 * @property int|null $a_1
 * @property int|null $a_2
 * @property int|null $a_3
 * @property int|null $a_4
 * @property int|null $g_1
 * @property int|null $g_2
 * @property int|null $g_3
 * @property int|null $g_4
 * @property int|null $g_5
 * @property int|null $am_1
 * @property int|null $am_2
 * @property int|null $am_3
 * @property int|null $am_4
 * @property int|null $am_5
 * @property int|null $am_6
 * @property int|null $am_7
 * @property int|null $am_8
 * @property string|null $time_op1
 * @property string|null $time_op2
 * @property string|null $time_op3
 * @property int|null $staff_kons
 * @property int|null $staff_op
 * @property int|null $staff_anes
 * @property int|null $staff_panes
 * @property int|null $staff_anak
 * @property int|null $asisten_id
 * @property int|null $instrument_id
 * @property int|null $on_loop
 * @property int|null $sa_1
 * @property int|null $sa_2
 * @property int|null $ods_1
 * @property int|null $ods_2
 * @property int|null $ods_3
 * @property int|null $pj_id
 * @property int|null $rr_id
 * @property int|null $pa
 * @property string|null $notes
 * @property int|null $spes_id
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property int|null $posted
 *
 * @property Registration $reg
 * @property DiagOpExt $diagMedis
 * @property TindakanOpExt $tindMedis
 * @property SpesialisasiOpExt $spes
 */
class RegOpExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_op_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_op_id'], 'required'],
            [['reg_op_id', 'reg_id', 'diag_medis_id', 'tind_medis_id', 'ot_1', 'ot_2', 'ot_3', 'ot_4', 'ot_5', 'ot_6', 'a_1', 'a_2', 'a_3', 'a_4', 'g_1', 'g_2', 'g_3', 'g_4', 'g_5', 'am_1', 'am_2', 'am_3', 'am_4', 'am_5', 'am_6', 'am_7', 'am_8', 'staff_kons', 'staff_op', 'staff_anes', 'staff_panes', 'staff_anak', 'asisten_id', 'instrument_id', 'on_loop', 'sa_1', 'sa_2', 'ods_1', 'ods_2', 'ods_3', 'pj_id', 'rr_id', 'pa', 'spes_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['date_op', 'time_op1', 'time_op2', 'time_op3', 'created_time', 'modified_time'], 'safe'],
            [['notes'], 'string'],
            [['reg_op_no'], 'string', 'max' => 50],
            [['reg_op_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
            [['diag_medis_id'], 'exist', 'skipOnError' => true, 'targetClass' => DiagOpExt::className(), 'targetAttribute' => ['diag_medis_id' => 'diag_id']],
            [['tind_medis_id'], 'exist', 'skipOnError' => true, 'targetClass' => TindakanOpExt::className(), 'targetAttribute' => ['tind_medis_id' => 'tindakan_id']],
            [['spes_id'], 'exist', 'skipOnError' => true, 'targetClass' => SpesialisasiOpExt::className(), 'targetAttribute' => ['spes_id' => 'spes_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_op_id' => 'Reg Op ID',
            'reg_id' => 'Reg ID',
            'reg_op_no' => 'Reg Op No',
            'date_op' => 'Date Op',
            'diag_medis_id' => 'Diag Medis ID',
            'tind_medis_id' => 'Tind Medis ID',
            'ot_1' => 'Ot 1',
            'ot_2' => 'Ot 2',
            'ot_3' => 'Ot 3',
            'ot_4' => 'Ot 4',
            'ot_5' => 'Ot 5',
            'ot_6' => 'Ot 6',
            'a_1' => 'A 1',
            'a_2' => 'A 2',
            'a_3' => 'A 3',
            'a_4' => 'A 4',
            'g_1' => 'G 1',
            'g_2' => 'G 2',
            'g_3' => 'G 3',
            'g_4' => 'G 4',
            'g_5' => 'G 5',
            'am_1' => 'Am 1',
            'am_2' => 'Am 2',
            'am_3' => 'Am 3',
            'am_4' => 'Am 4',
            'am_5' => 'Am 5',
            'am_6' => 'Am 6',
            'am_7' => 'Am 7',
            'am_8' => 'Am 8',
            'time_op1' => 'Time Op1',
            'time_op2' => 'Time Op2',
            'time_op3' => 'Time Op3',
            'staff_kons' => 'Staff Kons',
            'staff_op' => 'Staff Op',
            'staff_anes' => 'Staff Anes',
            'staff_panes' => 'Staff Panes',
            'staff_anak' => 'Staff Anak',
            'asisten_id' => 'Asisten ID',
            'instrument_id' => 'Instrument ID',
            'on_loop' => 'On Loop',
            'sa_1' => 'Sa 1',
            'sa_2' => 'Sa 2',
            'ods_1' => 'Ods 1',
            'ods_2' => 'Ods 2',
            'ods_3' => 'Ods 3',
            'pj_id' => 'Pj ID',
            'rr_id' => 'Rr ID',
            'pa' => 'Pa',
            'notes' => 'Notes',
            'spes_id' => 'Spes ID',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }

    /**
     * Gets query for [[DiagMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDiagMedis()
    {
        return $this->hasOne(DiagOpExt::className(), ['diag_id' => 'diag_medis_id']);
    }

    /**
     * Gets query for [[TindMedis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindMedis()
    {
        return $this->hasOne(TindakanOpExt::className(), ['tindakan_id' => 'tind_medis_id']);
    }

    /**
     * Gets query for [[Spes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpes()
    {
        return $this->hasOne(SpesialisasiOpExt::className(), ['spes_id' => 'spes_id']);
    }
}
