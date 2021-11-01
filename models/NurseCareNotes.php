<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nurse_care_notes".
 *
 * @property int $folio_id
 * @property int $seq
 * @property string|null $entry_date
 * @property string|null $notes
 * @property int|null $user_id
 * @property int|null $deleted
 *
 * @property ScrtUser $user
 * @property Folio $folio
 */
class NurseCareNotes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nurse_care_notes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'user_id', 'deleted'], 'integer'],
            [['entry_date'], 'safe'],
            [['notes'], 'string', 'max' => 100],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'seq' => 'Seq',
            'entry_date' => 'Entry Date',
            'notes' => 'Notes',
            'user_id' => 'User ID',
            'deleted' => 'Deleted',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'user_id']);
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
}
