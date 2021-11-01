<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_view_hasil_xt".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $user_id
 * @property string|null $view_date
 * @property int|null $view
 *
 * @property ScrtUser $user
 */
class FolioViewHasilXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_view_hasil_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'user_id', 'view'], 'integer'],
            [['view_date'], 'safe'],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['user_id' => 'user_id']],
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
            'user_id' => 'User ID',
            'view_date' => 'View Date',
            'view' => 'View',
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
}
