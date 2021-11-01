<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_jtemplate".
 *
 * @property int $jtemplate_id
 * @property string|null $template_name
 * @property int|null $journal_type_id
 * @property string|null $description
 * @property int|null $auto_recurring
 * @property int|null $created_user_id
 * @property string $created_time
 * @property int|null $modified_user_id
 * @property string $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlJournalType $journalType
 * @property GlJtemplateDet[] $glJtemplateDets
 */
class GlJtemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_jtemplate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jtemplate_id'], 'required'],
            [['jtemplate_id', 'journal_type_id', 'auto_recurring', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['template_name'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 100],
            [['template_name'], 'unique'],
            [['jtemplate_id'], 'unique'],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
            [['journal_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalType::className(), 'targetAttribute' => ['journal_type_id' => 'journal_type_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jtemplate_id' => 'Jtemplate ID',
            'template_name' => 'Template Name',
            'journal_type_id' => 'Journal Type ID',
            'description' => 'Description',
            'auto_recurring' => 'Auto Recurring',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
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
     * Gets query for [[JournalType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalType()
    {
        return $this->hasOne(GlJournalType::className(), ['journal_type_id' => 'journal_type_id']);
    }

    /**
     * Gets query for [[GlJtemplateDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJtemplateDets()
    {
        return $this->hasMany(GlJtemplateDet::className(), ['jtemplate_id' => 'jtemplate_id']);
    }
}
