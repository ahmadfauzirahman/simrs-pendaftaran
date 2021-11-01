<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "marketing_card_ext_det".
 *
 * @property int $card_id
 * @property int $seq
 * @property string|null $name
 * @property string|null $place_of_birth
 * @property string|null $birth_date
 * @property int|null $personal_relation_id
 *
 * @property MarketingCardExt $card
 * @property PersonalRelation $personalRelation
 */
class MarketingCardExtDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketing_card_ext_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_id', 'seq'], 'required'],
            [['card_id', 'seq', 'personal_relation_id'], 'integer'],
            [['birth_date'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['place_of_birth'], 'string', 'max' => 30],
            [['card_id', 'seq'], 'unique', 'targetAttribute' => ['card_id', 'seq']],
            [['card_id'], 'exist', 'skipOnError' => true, 'targetClass' => MarketingCardExt::className(), 'targetAttribute' => ['card_id' => 'card_id']],
            [['personal_relation_id'], 'exist', 'skipOnError' => true, 'targetClass' => PersonalRelation::className(), 'targetAttribute' => ['personal_relation_id' => 'personal_relation_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'card_id' => 'Card ID',
            'seq' => 'Seq',
            'name' => 'Name',
            'place_of_birth' => 'Place Of Birth',
            'birth_date' => 'Birth Date',
            'personal_relation_id' => 'Personal Relation ID',
        ];
    }

    /**
     * Gets query for [[Card]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCard()
    {
        return $this->hasOne(MarketingCardExt::className(), ['card_id' => 'card_id']);
    }

    /**
     * Gets query for [[PersonalRelation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalRelation()
    {
        return $this->hasOne(PersonalRelation::className(), ['personal_relation_id' => 'personal_relation_id']);
    }
}
