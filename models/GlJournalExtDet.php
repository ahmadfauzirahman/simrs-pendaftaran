<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gl_journal_ext_det".
 *
 * @property int $j_id
 * @property int $seq
 * @property int|null $account_id
 * @property float|null $debet
 * @property float|null $kredit
 * @property string|null $description
 *
 * @property GlJournalExt $j
 * @property GlAccount $account
 */
class GlJournalExtDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gl_journal_ext_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['j_id', 'seq'], 'required'],
            [['j_id', 'seq', 'account_id'], 'integer'],
            [['debet', 'kredit'], 'number'],
            [['description'], 'string', 'max' => 200],
            [['j_id', 'seq'], 'unique', 'targetAttribute' => ['j_id', 'seq']],
            [['j_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlJournalExt::className(), 'targetAttribute' => ['j_id' => 'j_id']],
            [['account_id'], 'exist', 'skipOnError' => true, 'targetClass' => GlAccount::className(), 'targetAttribute' => ['account_id' => 'account_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'j_id' => 'J ID',
            'seq' => 'Seq',
            'account_id' => 'Account ID',
            'debet' => 'Debet',
            'kredit' => 'Kredit',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[J]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJ()
    {
        return $this->hasOne(GlJournalExt::className(), ['j_id' => 'j_id']);
    }

    /**
     * Gets query for [[Account]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccount()
    {
        return $this->hasOne(GlAccount::className(), ['account_id' => 'account_id']);
    }
}
