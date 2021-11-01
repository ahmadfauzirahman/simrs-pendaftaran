<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "patient_contact".
 *
 * @property int $patient_id
 * @property int $seq
 * @property int|null $personal_relation_id
 * @property string|null $contact_name
 * @property string|null $id_card
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $rt
 * @property string|null $rw
 * @property string|null $village
 * @property string|null $city
 * @property string|null $zipcode
 * @property string|null $subdistrict
 * @property string|null $district
 * @property string|null $province
 * @property string|null $phone
 * @property string|null $fax
 * @property string|null $email
 * @property string|null $handphone
 * @property string|null $occupation
 * @property int|null $relative_patient_id
 *
 * @property Patient $relativePatient
 * @property PersonalRelation $personalRelation
 * @property Patient $patient
 */
class PatientContact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient_contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'seq'], 'required'],
            [['patient_id', 'seq', 'personal_relation_id', 'relative_patient_id'], 'integer'],
            [['contact_name', 'address_line1', 'address_line2', 'email'], 'string', 'max' => 50],
            [['id_card', 'village', 'city', 'subdistrict', 'district', 'province', 'occupation'], 'string', 'max' => 20],
            [['rt', 'rw'], 'string', 'max' => 3],
            [['zipcode'], 'string', 'max' => 5],
            [['phone', 'fax', 'handphone'], 'string', 'max' => 30],
            [['patient_id', 'seq'], 'unique', 'targetAttribute' => ['patient_id', 'seq']],
            [['relative_patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['relative_patient_id' => 'patient_id']],
            [['personal_relation_id'], 'exist', 'skipOnError' => true, 'targetClass' => PersonalRelation::className(), 'targetAttribute' => ['personal_relation_id' => 'personal_relation_id']],
            [['patient_id'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patient_id' => 'patient_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'patient_id' => 'Patient ID',
            'seq' => 'Seq',
            'personal_relation_id' => 'Personal Relation ID',
            'contact_name' => 'Contact Name',
            'id_card' => 'Id Card',
            'address_line1' => 'Address Line1',
            'address_line2' => 'Address Line2',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'village' => 'Village',
            'city' => 'City',
            'zipcode' => 'Zipcode',
            'subdistrict' => 'Subdistrict',
            'district' => 'District',
            'province' => 'Province',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'handphone' => 'Handphone',
            'occupation' => 'Occupation',
            'relative_patient_id' => 'Relative Patient ID',
        ];
    }

    /**
     * Gets query for [[RelativePatient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelativePatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'relative_patient_id']);
    }

    /**
     * Gets query for [[PersonalRelation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalRelation()
    {
        return $this->hasOne(PersonalRelation::className(), ['personal_relation_id' => 'personal_relation_id']);
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['patient_id' => 'patient_id']);
    }
}
