<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff_fee_calc".
 *
 * @property int $staff_id
 * @property string $trans_date
 * @property int $folio_id
 * @property int $folio_seq
 * @property int|null $item_id
 * @property float|null $trans_amount
 * @property float|null $share_amount
 * @property float|null $tax_amount
 * @property int|null $journal_id
 * @property int|null $gl_jfo_det_seq
 */
class StaffFeeCalc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff_fee_calc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'trans_date', 'folio_id', 'folio_seq'], 'required'],
            [['staff_id', 'folio_id', 'folio_seq', 'item_id', 'journal_id', 'gl_jfo_det_seq'], 'integer'],
            [['trans_date'], 'safe'],
            [['trans_amount', 'share_amount', 'tax_amount'], 'number'],
            [['staff_id', 'trans_date', 'folio_id', 'folio_seq'], 'unique', 'targetAttribute' => ['staff_id', 'trans_date', 'folio_id', 'folio_seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'staff_id' => 'Staff ID',
            'trans_date' => 'Trans Date',
            'folio_id' => 'Folio ID',
            'folio_seq' => 'Folio Seq',
            'item_id' => 'Item ID',
            'trans_amount' => 'Trans Amount',
            'share_amount' => 'Share Amount',
            'tax_amount' => 'Tax Amount',
            'journal_id' => 'Journal ID',
            'gl_jfo_det_seq' => 'Gl Jfo Det Seq',
        ];
    }
}
