<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okupasi_body_xt".
 *
 * @property int $okup_id
 * @property int $seq
 * @property int|null $body_id
 * @property int|null $body_type
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property OkupBodyItemXt $body
 * @property OkupasiXt $okup
 */
class OkupasiBodyXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okupasi_body_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq'], 'required'],
            [['okup_id', 'seq', 'body_id', 'body_type', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
            [['okup_id', 'seq'], 'unique', 'targetAttribute' => ['okup_id', 'seq']],
            [['body_id'], 'exist', 'skipOnError' => true, 'targetClass' => OkupBodyItemXt::className(), 'targetAttribute' => ['body_id' => 'body_id']],
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
            'body_id' => 'Body ID',
            'body_type' => 'Body Type',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Body]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBody()
    {
        return $this->hasOne(OkupBodyItemXt::className(), ['body_id' => 'body_id']);
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
