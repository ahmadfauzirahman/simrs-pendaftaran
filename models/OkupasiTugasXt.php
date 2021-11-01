<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_tugas_xt".
 *
 * @property int $okup_id
 * @property int $seq
 * @property string|null $tugas
 * @property string|null $target
 * @property string|null $cara
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property OkupasiXt $okup
 */
class OkupasiTugasXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_tugas_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq'], 'required'],
            [['okup_id', 'seq', 'created_user_id'], 'integer'],
            [['cara'], 'string'],
            [['created_time'], 'safe'],
            [['tugas', 'target'], 'string', 'max' => 100],
            [['okup_id', 'seq'], 'unique', 'targetAttribute' => ['okup_id', 'seq']],
            [['okup_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupasiXt::className(), 'targetAttribute' => ['okup_id' => 'okup_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'okup_id' => 'Okup ID',
            'seq' => 'Seq',
            'tugas' => 'Tugas',
            'target' => 'Target',
            'cara' => 'Cara',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Okup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkup()
    {
        return $this->hasOne(OkupasiXt::className(), ['okup_id' => 'okup_id']);
    }
}
