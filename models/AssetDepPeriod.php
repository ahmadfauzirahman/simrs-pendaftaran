<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_dep_period".
 *
 * @property int $asset_id
 * @property int $seq
 * @property int|null $gl_period
 * @property int|null $gl_year
 * @property string|null $trans_date
 * @property float|null $amount
 * @property float|null $book_value
 * @property int|null $posted
 *
 * @property Asset $asset
 */
class AssetDepPeriod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_dep_period';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id', 'seq'], 'required'],
            [['asset_id', 'seq', 'gl_period', 'gl_year', 'posted'], 'integer'],
            [['trans_date'], 'safe'],
            [['amount', 'book_value'], 'number'],
            [['asset_id', 'seq'], 'unique', 'targetAttribute' => ['asset_id', 'seq']],
            [['asset_id'], 'exist', 'skipOnError' => true, 'targetClass' => Asset::className(), 'targetAttribute' => ['asset_id' => 'asset_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'asset_id' => 'Asset ID',
            'seq' => 'Seq',
            'gl_period' => 'Gl Period',
            'gl_year' => 'Gl Year',
            'trans_date' => 'Trans Date',
            'amount' => 'Amount',
            'book_value' => 'Book Value',
            'posted' => 'Posted',
        ];
    }

    /**
     * Gets query for [[Asset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAsset()
    {
        return $this->hasOne(Asset::className(), ['asset_id' => 'asset_id']);
    }
}
