<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_mv_det".
 *
 * @property int $mv_id
 * @property int $seq
 * @property int|null $asset_id
 *
 * @property Asset $asset
 */
class AssetMvDet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'asset_mv_det';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mv_id', 'seq'], 'required'],
            [['mv_id', 'seq', 'asset_id'], 'integer'],
            [['mv_id', 'seq'], 'unique', 'targetAttribute' => ['mv_id', 'seq']],
            [['asset_id'], 'exist', 'skipOnError' => true, 'targetClass' => Asset::className(), 'targetAttribute' => ['asset_id' => 'asset_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mv_id' => 'Mv ID',
            'seq' => 'Seq',
            'asset_id' => 'Asset ID',
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
