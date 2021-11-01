<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medrec_transfer_det".
 *
 * @property int $mr_transfer_id
 * @property int $seq
 * @property int|null $folio_id
 */
class MedrecTransferDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medrec_transfer_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_transfer_id', 'seq'], 'required'],
            [['mr_transfer_id', 'seq', 'folio_id'], 'integer'],
            [['mr_transfer_id', 'seq'], 'unique', 'targetAttribute' => ['mr_transfer_id', 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mr_transfer_id' => 'Mr Transfer ID',
            'seq' => 'Seq',
            'folio_id' => 'Folio ID',
        ];
    }
}
