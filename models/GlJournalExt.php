<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_journal_ext".
 *
 * @property int $j_id
 * @property string|null $j_no
 * @property string|null $j_date
 * @property string|null $description
 * @property float|null $amount
 * @property int|null $posted
 * @property int|null $gl_periode
 * @property int|null $gl_year
 * @property float|null $gl_balance
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $completed
 * @property int|null $pc
 *
 * @property GlJournalExtDet[] $glJournalExtDets
 */
class GlJournalExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_journal_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['j_id'], 'required'],
            [['j_id', 'posted', 'gl_periode', 'gl_year', 'created_user_id', 'completed', 'pc'], 'integer'],
            [['j_date', 'created_time'], 'safe'],
            [['amount', 'gl_balance'], 'number'],
            [['j_no'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
            [['j_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'j_id' => 'J ID',
            'j_no' => 'J No',
            'j_date' => 'J Date',
            'description' => 'Description',
            'amount' => 'Amount',
            'posted' => 'Posted',
            'gl_periode' => 'Gl Periode',
            'gl_year' => 'Gl Year',
            'gl_balance' => 'Gl Balance',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'completed' => 'Completed',
            'pc' => 'Pc',
        ];
    }

    /**
     * Gets query for [[GlJournalExtDets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGlJournalExtDets()
    {
        return $this->hasMany(GlJournalExtDet::className(), ['j_id' => 'j_id']);
    }
}
