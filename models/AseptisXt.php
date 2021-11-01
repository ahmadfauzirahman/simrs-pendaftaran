<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aseptis_xt".
 *
 * @property int $folio_id
 * @property int $seq
 * @property int|null $item_id
 * @property string|null $pelarut
 * @property string|null $rute
 * @property string|null $before_date
 * @property string|null $before_hour
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 */
class AseptisXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aseptis_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq'], 'required'],
            [['folio_id', 'seq', 'item_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['before_date', 'before_hour', 'created_time', 'modified_time'], 'safe'],
            [['pelarut', 'rute'], 'string', 'max' => 50],
            [['folio_id', 'seq'], 'unique', 'targetAttribute' => ['folio_id', 'seq']],
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
            'item_id' => 'Item ID',
            'pelarut' => 'Pelarut',
            'rute' => 'Rute',
            'before_date' => 'Before Date',
            'before_hour' => 'Before Hour',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }
}
