<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_data_icd".
 *
 * @property int|null $col1
 * @property string|null $col2
 * @property string|null $col3
 * @property int|null $col4
 * @property string|null $col5
 * @property string|null $col6
 * @property string|null $col7
 * @property string|null $col8
 * @property string|null $col9
 * @property string|null $col10
 * @property string|null $col11
 * @property string|null $col12
 * @property string|null $col13
 * @property string|null $col14
 */
class TbDataIcd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_data_icd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['col1', 'col4'], 'integer'],
            [['col2', 'col3'], 'string', 'max' => 1],
            [['col5'], 'string', 'max' => 3],
            [['col6'], 'string', 'max' => 6],
            [['col7', 'col10', 'col11', 'col12', 'col13', 'col14'], 'string', 'max' => 5],
            [['col8'], 'string', 'max' => 4],
            [['col9'], 'string', 'max' => 185],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'col1' => 'Col1',
            'col2' => 'Col2',
            'col3' => 'Col3',
            'col4' => 'Col4',
            'col5' => 'Col5',
            'col6' => 'Col6',
            'col7' => 'Col7',
            'col8' => 'Col8',
            'col9' => 'Col9',
            'col10' => 'col10',
            'col11' => 'Col11',
            'col12' => 'Col12',
            'col13' => 'Col13',
            'col14' => 'Col14',
        ];
    }
}
