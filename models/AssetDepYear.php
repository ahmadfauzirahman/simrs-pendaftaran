<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_dep_year".
 *
 * @property int $asset_id
 * @property int $year_no
 * @property float|null $rate_year
 * @property float|null $dep_year
 * @property float|null $acc_dep_year
 * @property float|null $book_value
 *
 * @property Asset $asset
 */
class AssetDepYear extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_dep_year';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['asset_id', 'year_no'], 'required'],
            [['asset_id', 'year_no'], 'integer'],
            [['rate_year', 'dep_year', 'acc_dep_year', 'book_value'], 'number'],
            [['asset_id', 'year_no'], 'unique', 'targetAttribute' => ['asset_id', 'year_no']],
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
            'year_no' => 'Year No',
            'rate_year' => 'Rate Year',
            'dep_year' => 'Dep Year',
            'acc_dep_year' => 'Acc Dep Year',
            'book_value' => 'Book Value',
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
