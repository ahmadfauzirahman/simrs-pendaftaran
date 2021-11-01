<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "folio_cos_change".
 *
 * @property int $folio_id
 * @property int $approval_user_id
 * @property string|null $approval_date
 * @property string $seq
 *
 * @property Folio $folio
 * @property ScrtUser $approvalUser
 */
class FolioCosChange extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'folio_cos_change';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'approval_user_id'], 'integer'],
            [['approval_date'], 'safe'],
            [['seq'], 'string', 'max' => 45],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
            [['folio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Folio::className(), 'targetAttribute' => ['folio_id' => 'folio_id']],
            [['approval_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['approval_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'folio_id' => 'Folio ID',
            'approval_user_id' => 'Approval User ID',
            'approval_date' => 'Approval Date',
            'seq' => 'Seq',
        ];
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

    /**
     * Gets query for [[ApprovalUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApprovalUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'approval_user_id']);
    }
}
