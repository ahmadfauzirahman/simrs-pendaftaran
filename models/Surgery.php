<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "surgery".
 *
 * @property int $reg_id
 * @property int|null $staff_ahli_bedah
 * @property int|null $staff_ahli_anastesi
 * @property int|null $staff_asisten
 * @property string|null $staff_nurse_instrumen
 * @property string|null $diag_pra_op
 * @property string|null $diag_pasca_op
 * @property string|null $jaringan_eksisi
 * @property int|null $pemeriksaan_patologi
 * @property int|null $konsul_op
 * @property int|null $staff_konsul
 * @property string|null $op_name
 * @property string|null $tgl_op
 * @property string|null $start_op
 * @property string|null $end_op
 * @property string|null $end_durasi
 * @property string|null $surgery1
 * @property string|null $surgery2
 * @property string|null $surgery3
 * @property string|null $surgery4
 * @property int|null $klasifikasi_emergensi
 * @property int|null $klasifikasi_elektif
 * @property int|null $klasifikasi_poliklinis
 * @property int|null $klasifikasi_ods
 * @property int|null $klasifikasi_besar
 * @property int|null $klasifikasi_khusus
 * @property int|null $klasifikasi_sedang
 * @property int|null $klasifikasi_kecil
 * @property int|null $report_surgery_id
 * @property string|null $report_name
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property int|null $modified_time
 * @property int|null $posted
 *
 * @property Staff $staffAhliBedah
 * @property Staff $staffAhliAnastesi
 * @property Staff $staffAsisten
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property Registration $reg
 * @property ItemSurgeryExt $reportSurgery
 */
class Surgery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surgery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'staff_ahli_bedah', 'staff_ahli_anastesi', 'staff_asisten', 'pemeriksaan_patologi', 'konsul_op', 'staff_konsul', 'klasifikasi_emergensi', 'klasifikasi_elektif', 'klasifikasi_poliklinis', 'klasifikasi_ods', 'klasifikasi_besar', 'klasifikasi_khusus', 'klasifikasi_sedang', 'klasifikasi_kecil', 'report_surgery_id', 'created_user_id', 'modified_user_id', 'modified_time', 'posted'], 'integer'],
            [['diag_pra_op', 'diag_pasca_op', 'jaringan_eksisi', 'op_name', 'surgery1', 'surgery2', 'surgery3', 'surgery4'], 'string'],
            [['tgl_op', 'start_op', 'end_op', 'created_time'], 'safe'],
            [['staff_nurse_instrumen', 'end_durasi'], 'string', 'max' => 50],
            [['report_name'], 'string', 'max' => 500],
            [['reg_id'], 'unique'],
            [['staff_ahli_bedah'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_ahli_bedah' => 'staff_id']],
            [['staff_ahli_anastesi'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_ahli_anastesi' => 'staff_id']],
            [['staff_asisten'], 'exist', 'skipOnError' => true, 'targetClass' => Staff::className(), 'targetAttribute' => ['staff_asisten' => 'staff_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
            [['report_surgery_id'], 'exist', 'skipOnError' => true, 'targetClass' => ItemSurgeryExt::className(), 'targetAttribute' => ['report_surgery_id' => 'item_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'staff_ahli_bedah' => 'Staff Ahli Bedah',
            'staff_ahli_anastesi' => 'Staff Ahli Anastesi',
            'staff_asisten' => 'Staff Asisten',
            'staff_nurse_instrumen' => 'Staff Nurse Instrumen',
            'diag_pra_op' => 'Diag Pra Op',
            'diag_pasca_op' => 'Diag Pasca Op',
            'jaringan_eksisi' => 'Jaringan Eksisi',
            'pemeriksaan_patologi' => 'Pemeriksaan Patologi',
            'konsul_op' => 'Konsul Op',
            'staff_konsul' => 'Staff Konsul',
            'op_name' => 'Op Name',
            'tgl_op' => 'Tgl Op',
            'start_op' => 'Start Op',
            'end_op' => 'End Op',
            'end_durasi' => 'End Durasi',
            'surgery1' => 'Surgery1',
            'surgery2' => 'Surgery2',
            'surgery3' => 'Surgery3',
            'surgery4' => 'Surgery4',
            'klasifikasi_emergensi' => 'Klasifikasi Emergensi',
            'klasifikasi_elektif' => 'Klasifikasi Elektif',
            'klasifikasi_poliklinis' => 'Klasifikasi Poliklinis',
            'klasifikasi_ods' => 'Klasifikasi Ods',
            'klasifikasi_besar' => 'Klasifikasi Besar',
            'klasifikasi_khusus' => 'Klasifikasi Khusus',
            'klasifikasi_sedang' => 'Klasifikasi Sedang',
            'klasifikasi_kecil' => 'Klasifikasi Kecil',
            'report_surgery_id' => 'Report Surgery ID',
            'report_name' => 'Report Name',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[StaffAhliBedah]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAhliBedah()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'staff_ahli_bedah']);
    }

    /**
     * Gets query for [[StaffAhliAnastesi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAhliAnastesi()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'staff_ahli_anastesi']);
    }

    /**
     * Gets query for [[StaffAsisten]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaffAsisten()
    {
        return $this->hasOne(Staff::className(), ['staff_id' => 'staff_asisten']);
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
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }

    /**
     * Gets query for [[ReportSurgery]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReportSurgery()
    {
        return $this->hasOne(ItemSurgeryExt::className(), ['item_id' => 'report_surgery_id']);
    }
}
