<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "term_payment".
 *
 * @property int $term_payment_id
 * @property string|null $description
 * @property int|null $disc_days
 * @property float|null $disc_pc
 * @property int|null $net_days
 * @property int|null $cod
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property ScrtUser $createdUser
 * @property ScrtUser $modifiedUser
 */
class TermPayment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'term_payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['disc_days', 'net_days', 'cod', 'created_user_id', 'modified_user_id'], 'integer'],
            [['disc_pc'], 'number'],
            [['created_time', 'modified_time'], 'safe'],
            [['description'], 'string', 'max' => 50],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
            [['modified_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['modified_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'term_payment_id' => 'Term Payment ID',
            'description' => 'Description',
            'disc_days' => 'Disc Days',
            'disc_pc' => 'Disc Pc',
            'net_days' => 'Net Days',
            'cod' => 'Cod',
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
}
