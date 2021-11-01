<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_xt".
 *
 * @property int $okup_id
 * @property string|null $okup_no
 * @property string|null $okup_tgl
 * @property int|null $patient_id
 * @property int|null $reg_id
 * @property int|null $occupation_id
 * @property int|null $pay_by_id
 * @property int|null $ref_id
 * @property string|null $kondisi_penyakit
 * @property int|null $sesuaitdk
 * @property int|null $rokk
 * @property int|null $a1
 * @property int|null $a2
 * @property int|null $a3
 * @property int|null $a4
 * @property int|null $a5
 * @property int|null $a6
 * @property int|null $a7
 * @property int|null $a8
 * @property int|null $b1
 * @property int|null $b2
 * @property int|null $b3
 * @property int|null $b4
 * @property int|null $b5
 * @property int|null $b6
 * @property int|null $b7
 * @property int|null $b8
 * @property int|null $b9
 * @property int|null $b10
 * @property int|null $b11
 * @property int|null $b12
 * @property int|null $c1
 * @property int|null $c2
 * @property int|null $c3
 * @property int|null $c4
 * @property int|null $c5
 * @property int|null $c6
 * @property int|null $c7
 * @property int|null $c8
 * @property int|null $c9
 * @property int|null $c10
 * @property int|null $c11
 * @property int|null $c12
 * @property int|null $c13
 * @property int|null $d1
 * @property int|null $d2
 * @property int|null $d3
 * @property int|null $d4
 * @property int|null $d5
 * @property int|null $d6
 * @property int|null $d7
 * @property int|null $d8
 * @property int|null $d9
 * @property int|null $d10
 * @property int|null $d11
 * @property int|null $d12
 * @property int|null $d13
 * @property int|null $d14
 * @property int|null $d15
 * @property int|null $d16
 * @property string|null $ok61
 * @property string|null $ok62
 * @property int|null $ok7a1
 * @property int|null $ok7a2
 * @property string|null $ok7b
 * @property int|null $occup2
 * @property int|null $occup3
 * @property string|null $lingkungan
 * @property int|null $posted
 * @property int|null $closing
 * @property string|null $control_date
 * @property int|null $status_kelaikan
 * @property string|null $rekomendasi
 * @property int|null $unit_control_id
 * @property string|null $ket_control
 * @property string|null $didapati
 * @property string|null $diagnosa
 * @property int|null $pm
 * @property string|null $pm2
 * @property string|null $tuntutan
 * @property string|null $mkes
 * @property string|null $fungsi1
 * @property string|null $fungsi2
 * @property string|null $fungsi3
 * @property string|null $risiko
 * @property string|null $rekomendasi2
 * @property string|null $rekomendasi3
 * @property string|null $toleransi
 * @property string|null $numkep
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property OkupasiAlatXt[] $okupasiAlatXts
 * @property OkupasiBodyXt[] $okupasiBodyXts
 * @property OkupasiHistoryXt[] $okupasiHistoryXts
 * @property OkupasiIcdXt[] $okupasiIcdXts
 * @property OkupasiIcfokupXt[] $okupasiIcfokupXts
 * @property OkupasiPatientXt $okupasiPatientXt
 * @property OkupasiPhotoXt $okupasiPhotoXt
 * @property OkupasiTugasXt[] $okupasiTugasXts
 * @property Registration $reg
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property ReferensiOkupasiXt $ref
 * @property OkupasiPayByXt $payBy
 * @property OkupasiKelaikanXt $statusKelaikan
 */
class OkupasiXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id'], 'required'],
            [['okup_id', 'patient_id', 'reg_id', 'occupation_id', 'pay_by_id', 'ref_id', 'sesuaitdk', 'rokk', 'a1', 'a2', 'a3', 'a4', 'a5', 'a6', 'a7', 'a8', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'b9', 'b10', 'b11', 'b12', 'c1', 'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'c10', 'c11', 'c12', 'c13', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'd10', 'd11', 'd12', 'd13', 'd14', 'd15', 'd16', 'ok7a1', 'ok7a2', 'occup2', 'occup3', 'posted', 'closing', 'status_kelaikan', 'unit_control_id', 'pm', 'created_user_id', 'modified_user_id'], 'integer'],
            [['okup_tgl', 'control_date', 'created_time', 'modified_time'], 'safe'],
            [['ok61', 'ok62', 'ok7b', 'ket_control', 'didapati', 'diagnosa'], 'string'],
            [['okup_no'], 'string', 'max' => 20],
            [['kondisi_penyakit', 'pm2', 'tuntutan', 'mkes', 'fungsi1', 'fungsi2', 'fungsi3', 'risiko', 'rekomendasi2', 'rekomendasi3', 'toleransi'], 'string', 'max' => 1000],
            [['lingkungan', 'numkep'], 'string', 'max' => 100],
            [['rekomendasi'], 'string', 'max' => 5000],
            [['okup_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['ref_id'], 'exist', 'skipOnError' => true, 'targetClass' => ReferensiOkupasiXt::className(), 'targetAttribute' => ['ref_id' => 'ref_id']],
            [['pay_by_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiPayByXt::className(), 'targetAttribute' => ['pay_by_id' => 'pay_by_id']],
            [['status_kelaikan'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiKelaikanXt::className(), 'targetAttribute' => ['status_kelaikan' => 'status_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'okup_id' => 'Okup ID',
            'okup_no' => 'Okup No',
            'okup_tgl' => 'Okup Tgl',
            'patient_id' => 'Patient ID',
            'reg_id' => 'Reg ID',
            'occupation_id' => 'Occupation ID',
            'pay_by_id' => 'Pay By ID',
            'ref_id' => 'Ref ID',
            'kondisi_penyakit' => 'Kondisi Penyakit',
            'sesuaitdk' => 'Sesuaitdk',
            'rokk' => 'Rokk',
            'a1' => 'A1',
            'a2' => 'A2',
            'a3' => 'A3',
            'a4' => 'A4',
            'a5' => 'A5',
            'a6' => 'A6',
            'a7' => 'A7',
            'a8' => 'A8',
            'b1' => 'B1',
            'b2' => 'B2',
            'b3' => 'B3',
            'b4' => 'B4',
            'b5' => 'B5',
            'b6' => 'B6',
            'b7' => 'B7',
            'b8' => 'B8',
            'b9' => 'B9',
            'b10' => 'b10',
            'b11' => 'B11',
            'b12' => 'B12',
            'c1' => 'C1',
            'c2' => 'C2',
            'c3' => 'C3',
            'c4' => 'C4',
            'c5' => 'C5',
            'c6' => 'C6',
            'c7' => 'C7',
            'c8' => 'C8',
            'c9' => 'C9',
            'c10' => 'c10',
            'c11' => 'C11',
            'c12' => 'C12',
            'c13' => 'C13',
            'd1' => 'D1',
            'd2' => 'D2',
            'd3' => 'D3',
            'd4' => 'D4',
            'd5' => 'D5',
            'd6' => 'D6',
            'd7' => 'D7',
            'd8' => 'D8',
            'd9' => 'D9',
            'd10' => 'd10',
            'd11' => 'D11',
            'd12' => 'D12',
            'd13' => 'D13',
            'd14' => 'D14',
            'd15' => 'D15',
            'd16' => 'D16',
            'ok61' => 'Ok61',
            'ok62' => 'Ok62',
            'ok7a1' => 'Ok7a1',
            'ok7a2' => 'Ok7a2',
            'ok7b' => 'Ok7b',
            'occup2' => 'Occup2',
            'occup3' => 'Occup3',
            'lingkungan' => 'Lingkungan',
            'posted' => 'Posted',
            'closing' => 'Closing',
            'control_date' => 'Control Date',
            'status_kelaikan' => 'Status Kelaikan',
            'rekomendasi' => 'Rekomendasi',
            'unit_control_id' => 'Unit Control ID',
            'ket_control' => 'Ket Control',
            'didapati' => 'Didapati',
            'diagnosa' => 'Diagnosa',
            'pm' => 'Pm',
            'pm2' => 'Pm2',
            'tuntutan' => 'Tuntutan',
            'mkes' => 'Mkes',
            'fungsi1' => 'Fungsi1',
            'fungsi2' => 'Fungsi2',
            'fungsi3' => 'Fungsi3',
            'risiko' => 'Risiko',
            'rekomendasi2' => 'Rekomendasi2',
            'rekomendasi3' => 'Rekomendasi3',
            'toleransi' => 'Toleransi',
            'numkep' => 'Numkep',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[OkupasiAlatXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiAlatXts()
    {
        return $this->hasMany(OkupasiAlatXt::className(), ['okup_id' => 'okup_id']);
    }

    /**
     * Gets query for [[OkupasiBodyXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiBodyXts()
    {
        return $this->hasMany(OkupasiBodyXt::className(), ['okup_id' => 'okup_id']);
    }

    /**
     * Gets query for [[OkupasiHistoryXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiHistoryXts()
    {
        return $this->hasMany(OkupasiHistoryXt::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[OkupasiIcdXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiIcdXts()
    {
        return $this->hasMany(OkupasiIcdXt::className(), ['okup_id' => 'okup_id']);
    }

    /**
     * Gets query for [[OkupasiIcfokupXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiIcfokupXts()
    {
        return $this->hasMany(OkupasiIcfokupXt::className(), ['okup_id' => 'okup_id']);
    }

    /**
     * Gets query for [[OkupasiPatientXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiPatientXt()
    {
        return $this->hasOne(OkupasiPatientXt::className(), ['patient_id' => 'patient_id']);
    }

    /**
     * Gets query for [[OkupasiPhotoXt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiPhotoXt()
    {
        return $this->hasOne(OkupasiPhotoXt::className(), ['okup_id' => 'okup_id']);
    }

    /**
     * Gets query for [[OkupasiTugasXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiTugasXts()
    {
        return $this->hasMany(OkupasiTugasXt::className(), ['okup_id' => 'okup_id']);
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
     * Gets query for [[Ref]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRef()
    {
        return $this->hasOne(ReferensiOkupasiXt::className(), ['ref_id' => 'ref_id']);
    }

    /**
     * Gets query for [[PayBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBy()
    {
        return $this->hasOne(OkupasiPayByXt::className(), ['pay_by_id' => 'pay_by_id']);
    }

    /**
     * Gets query for [[StatusKelaikan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatusKelaikan()
    {
        return $this->hasOne(OkupasiKelaikanXt::className(), ['status_id' => 'status_kelaikan']);
    }
}
