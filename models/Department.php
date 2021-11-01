<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "department".
 *
 * @property int $dept_id
 * @property string|null $dept_name
 * @property string|null $person_in_charge
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 * @property string|null $unit_caption
 * @property string|null $sub_unit_caption
 * @property resource|null $small_icon
 * @property resource|null $large_icon
 * @property string|null $description
 * @property int|null $tab_charges
 * @property int|null $tab_auto_charges
 * @property int|null $tab_anamnesis
 * @property int|null $tab_physical_exam
 * @property int|null $tab_other_exam
 * @property int|null $tab_diagnosis
 * @property int|null $tab_therapy
 * @property int|null $tab_procedure
 * @property int|null $tab_prognosis
 * @property int|null $tab_alergy
 * @property int|null $tab_degenerative
 * @property int|null $tab_chronic
 * @property int|null $tab_diet
 * @property int|null $tab_notes
 * @property int|null $gl_jtype_id
 * @property int|null $col_staff
 * @property string|null $refer_dept_code
 *
 * @property CosDept[] $cosDepts
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlJournalType $glJtype
 * @property DeptItem[] $deptItems
 * @property Folio[] $folios
 * @property GlJfoDet[] $glJfoDets
 * @property GlJournalDet[] $glJournalDets
 * @property PayByCos[] $payByCos
 * @property PayBy[] $payBies
 * @property PayByDept[] $payByDepts
 * @property SubModule[] $subModules
 * @property Unit[] $units
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_user_id', 'modified_user_id', 'tab_charges', 'tab_auto_charges', 'tab_anamnesis', 'tab_physical_exam', 'tab_other_exam', 'tab_diagnosis', 'tab_therapy', 'tab_procedure', 'tab_prognosis', 'tab_alergy', 'tab_degenerative', 'tab_chronic', 'tab_diet', 'tab_notes', 'gl_jtype_id', 'col_staff'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['small_icon', 'large_icon', 'description'], 'string'],
            [['dept_name', 'person_in_charge', 'unit_caption', 'sub_unit_caption', 'refer_dept_code'], 'string', 'max' => 50],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['gl_jtype_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['gl_jtype_id' => 'journal_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dept_id' => 'Dept ID',
            'dept_name' => 'Dept Name',
            'person_in_charge' => 'Person In Charge',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
            'unit_caption' => 'Unit Caption',
            'sub_unit_caption' => 'Sub Unit Caption',
            'small_icon' => 'Small Icon',
            'large_icon' => 'Large Icon',
            'description' => 'Description',
            'tab_charges' => 'Tab Charges',
            'tab_auto_charges' => 'Tab Auto Charges',
            'tab_anamnesis' => 'Tab Anamnesis',
            'tab_physical_exam' => 'Tab Physical Exam',
            'tab_other_exam' => 'Tab Other Exam',
            'tab_diagnosis' => 'Tab Diagnosis',
            'tab_therapy' => 'Tab Therapy',
            'tab_procedure' => 'Tab Procedure',
            'tab_prognosis' => 'Tab Prognosis',
            'tab_alergy' => 'Tab Alergy',
            'tab_degenerative' => 'Tab Degenerative',
            'tab_chronic' => 'Tab Chronic',
            'tab_diet' => 'Tab Diet',
            'tab_notes' => 'Tab Notes',
            'gl_jtype_id' => 'Gl Jtype ID',
            'col_staff' => 'Col Staff',
            'refer_dept_code' => 'Refer Dept Code',
        ];
    }

    /**
     * Gets query for [[CosDepts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCosDepts()
    {
        return $this->hasMany(CosDept::className(), ['dept_id' => 'dept_id']);
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
     * Gets query for [[GlJtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtype()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'gl_jtype_id']);
    }

    /**
     * Gets query for [[DeptItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptItems()
    {
        return $this->hasMany(DeptItem::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[Folios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFolios()
    {
        return $this->hasMany(Folio::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['department_id' => 'dept_id']);
    }

    /**
     * Gets query for [[GlJournalDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalDets()
    {
        return $this->hasMany(GlJournalDet::className(), ['department_id' => 'dept_id']);
    }

    /**
     * Gets query for [[PayByCos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByCos()
    {
        return $this->hasMany(PayByCos::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[PayBies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayBies()
    {
        return $this->hasMany(PayBy::className(), ['pay_by_id' => 'pay_by_id'])->viaTable('pay_by_cos', ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[PayByDepts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayByDepts()
    {
        return $this->hasMany(PayByDept::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[SubModules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubModules()
    {
        return $this->hasMany(SubModule::className(), ['dept_id' => 'dept_id']);
    }

    /**
     * Gets query for [[Units]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['dept_id' => 'dept_id']);
    }
}
