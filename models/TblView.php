<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_view".
 *
 * @property int $tbl_view_id
 * @property string|null $tbl_view_name
 * @property string|null $description
 * @property string|null $view_name
 * @property resource|null $image
 */
class TblView extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_view';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tbl_view_id'], 'required'],
            [['tbl_view_id'], 'integer'],
            [['image'], 'string'],
            [['tbl_view_name'], 'string', 'max' => 35],
            [['description'], 'string', 'max' => 100],
            [['view_name'], 'string', 'max' => 15],
            [['tbl_view_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'tbl_view_id' => 'Tbl View ID',
            'tbl_view_name' => 'Tbl View Name',
            'description' => 'Description',
            'view_name' => 'View Name',
            'image' => 'Image',
        ];
    }
}
