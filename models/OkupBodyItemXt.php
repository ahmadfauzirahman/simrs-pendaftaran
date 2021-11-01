<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "okup_body_item_xt".
 *
 * @property int $body_id
 * @property string|null $body_name
 * @property int $body_type
 *
 * @property OkupasiBodyXt[] $okupasiBodyXts
 */
class OkupBodyItemXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'okup_body_item_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body_id'], 'required'],
            [['body_id'], 'integer'],
            [['body_name'], 'string', 'max' => 100],
            [['body_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'body_id' => 'Body ID',
            'body_name' => 'Body Name',
            'body_type' => 'Body Type',
        ];
    }

    /**
     * Gets query for [[OkupasiBodyXts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOkupasiBodyXts()
    {
        return $this->hasMany(OkupasiBodyXt::className(), ['body_id' => 'body_id']);
    }
}
