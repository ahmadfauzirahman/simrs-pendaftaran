<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reg_apm_xt".
 *
 * @property int $reg_id
 * @property string|null $date_cetak
 * @property int|null $created_user_id
 * @property int|null $post_rm
 * @property string|null $date_post_rm
 * @property int|null $flag_post
 *
 * @property Registration $reg
 */
class RegApmXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reg_apm_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'created_user_id', 'post_rm', 'flag_post'], 'integer'],
            [['date_cetak', 'date_post_rm'], 'safe'],
            [['reg_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'date_cetak' => 'Date Cetak',
            'created_user_id' => 'Created User ID',
            'post_rm' => 'Post Rm',
            'date_post_rm' => 'Date Post Rm',
            'flag_post' => 'Flag Post',
        ];
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }
}
