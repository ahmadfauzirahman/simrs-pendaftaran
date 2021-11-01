<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_journal".
 *
 * @property int $journal_id
 * @property string|null $journal_no
 * @property string|null $journal_date
 * @property int $journal_type_id
 * @property string|null $description
 * @property float|null $amount
 * @property int|null $posted
 * @property int|null $gl_period
 * @property int|null $gl_year
 * @property int|null $source
 * @property int|null $source_trans_id
 * @property int|null $reverse
 * @property string|null $reverse_date
 * @property int|null $by_system
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property GlJfoDet[] $glJfoDets
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 * @property GlJournalType $journalType
 * @property GlJournalDet[] $glJournalDets
 */
class GlJournal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_journal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'journal_type_id'], 'required'],
            [['journal_id', 'journal_type_id', 'posted', 'gl_period', 'gl_year', 'source', 'source_trans_id', 'reverse', 'by_system', 'created_user_id', 'modified_user_id'], 'integer'],
            [['journal_date', 'reverse_date', 'created_time', 'modified_time'], 'safe'],
            [['amount'], 'number'],
            [['journal_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
            [['journal_id'], 'unique'],
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
            'journal_id' => 'Journal ID',
            'journal_no' => 'Journal No',
            'journal_date' => 'Journal Date',
            'journal_type_id' => 'Journal Type ID',
            'description' => 'Description',
            'amount' => 'Amount',
            'posted' => 'Posted',
            'gl_period' => 'Gl Period',
            'gl_year' => 'Gl Year',
            'source' => 'Source',
            'source_trans_id' => 'Source Trans ID',
            'reverse' => 'Reverse',
            'reverse_date' => 'Reverse Date',
            'by_system' => 'By System',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[GlJfoDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJfoDets()
    {
        return $this->hasMany(GlJfoDet::className(), ['journal_id' => 'journal_id']);
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
     * Gets query for [[GlJournalDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalDets()
    {
        return $this->hasMany(GlJournalDet::className(), ['journal_id' => 'journal_id']);
    }
}
