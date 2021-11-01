<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu_indet_xt".
 *
 * @property int $mcu_id
 * @property int $seq
 * @property int|null $posted
 * @property int|null $cd2
 * @property int|null $cd3
 * @property int|null $cd5
 * @property int|null $e1
 * @property int|null $e2
 * @property int|null $e3
 * @property int|null $e4
 * @property int|null $e5
 * @property int|null $e6
 * @property int|null $e7
 * @property int|null $e8
 * @property int|null $e9
 * @property int|null $e10
 * @property int|null $e11
 * @property int|null $e12
 * @property int|null $e13
 * @property int|null $e14
 * @property int|null $e15
 * @property int|null $e16
 * @property int|null $e17
 * @property int|null $e18
 * @property int|null $e19
 * @property int|null $e20
 * @property int|null $e21
 * @property int|null $e22
 * @property int|null $e23
 * @property int|null $e24
 * @property int|null $e25
 * @property int|null $e26
 * @property int|null $e27
 * @property int|null $e28
 * @property int|null $e29
 * @property int|null $e30
 * @property string|null $e31
 * @property string|null $e32
 * @property string|null $e33
 * @property string|null $e34
 * @property string|null $e35
 * @property string|null $e36
 * @property string|null $e37
 * @property string|null $e38
 * @property string|null $e39
 * @property string|null $e40
 * @property string|null $e41
 * @property string|null $ep1
 * @property string|null $ep2
 * @property string|null $ep3
 * @property string|null $ep4
 * @property string|null $ep5
 * @property string|null $ep6
 * @property string|null $ep7
 * @property string|null $ep8
 * @property string|null $ep9
 * @property string|null $ep10
 * @property string|null $ep11
 * @property string|null $ep12
 * @property string|null $ep13
 * @property string|null $ep14
 * @property string|null $ep15
 * @property string|null $ep16
 * @property string|null $ep17
 * @property string|null $ep18
 * @property string|null $ep19
 * @property string|null $ep20
 * @property string|null $ep21
 * @property string|null $ep22
 * @property string|null $ep23
 * @property string|null $ep24
 * @property string|null $ep25
 * @property string|null $ep26
 * @property string|null $ep27
 * @property string|null $ep28
 * @property string|null $ep29
 * @property string|null $ep30
 * @property string|null $ep31
 * @property string|null $ep32
 * @property string|null $ep33
 * @property string|null $ep34
 * @property string|null $ep35
 * @property string|null $ep36
 * @property string|null $ep37
 * @property string|null $ep38
 * @property string|null $ep39
 * @property string|null $ep40
 * @property string|null $ep41
 * @property string|null $pe1
 * @property string|null $pe2
 * @property string|null $pe3a
 * @property string|null $pe3b
 * @property string|null $pe4
 * @property string|null $pe5
 * @property string|null $pe6
 * @property string|null $pe7
 * @property string|null $pe8
 * @property string|null $pe9
 * @property string|null $pe10
 * @property string|null $pe11
 * @property string|null $pe12
 * @property string|null $pe13
 * @property string|null $pe14
 * @property string|null $pe15
 * @property string|null $pe16
 * @property string|null $pe17
 * @property string|null $pe18
 * @property string|null $pe19
 * @property string|null $pe20
 * @property string|null $pe21
 * @property string|null $pe22
 * @property string|null $pe23
 * @property string|null $pe24
 * @property string|null $pe25
 * @property string|null $pe26
 * @property string|null $pe27
 * @property string|null $pe28
 * @property string|null $pe29
 * @property string|null $pe30
 * @property string|null $pe31
 * @property string|null $pe32
 * @property string|null $pe33
 * @property string|null $pe34
 * @property string|null $pe35
 * @property string|null $pe36
 * @property string|null $ape1
 * @property string|null $ape2
 * @property string|null $ape3
 * @property string|null $m1
 * @property string|null $mkesim
 * @property string|null $msaran
 * @property int|null $created_user_id
 * @property string|null $created_time
 * @property int|null $modified_user_id
 * @property string|null $modified_time
 *
 * @property McuDetExt $mcu
 */
class McuIndetXt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu_indet_xt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mcu_id', 'seq'], 'required'],
            [['mcu_id', 'seq', 'posted', 'cd2', 'cd3', 'cd5', 'e1', 'e2', 'e3', 'e4', 'e5', 'e6', 'e7', 'e8', 'e9', 'e10', 'e11', 'e12', 'e13', 'e14', 'e15', 'e16', 'e17', 'e18', 'e19', 'e20', 'e21', 'e22', 'e23', 'e24', 'e25', 'e26', 'e27', 'e28', 'e29', 'e30', 'created_user_id', 'modified_user_id'], 'integer'],
            [['created_time', 'modified_time'], 'safe'],
            [['e31', 'e32', 'e33', 'e34', 'e35'], 'string', 'max' => 20],
            [['e36', 'e37', 'e38', 'e39', 'e40', 'e41', 'pe1', 'pe2', 'pe3a', 'pe3b', 'pe4', 'pe5', 'pe6', 'pe7', 'pe8', 'pe9', 'pe28', 'pe29', 'pe30', 'pe31', 'pe32', 'pe33', 'pe34', 'pe35', 'pe36', 'ape1', 'ape2'], 'string', 'max' => 50],
            [['ep1', 'ep2', 'ep3', 'ep4', 'ep5', 'ep6', 'ep7', 'ep8', 'ep9', 'ep10', 'ep11', 'ep12', 'ep13', 'ep14', 'ep15', 'ep16', 'ep17', 'ep18', 'ep19', 'ep20', 'ep21', 'ep22', 'ep23', 'ep24', 'ep25', 'ep26', 'ep27', 'ep28', 'ep29', 'ep30', 'ep31', 'ep32', 'ep33', 'ep34', 'ep35', 'ep36', 'ep37', 'ep38', 'ep39', 'ep40', 'ep41', 'pe10', 'pe11', 'pe12', 'pe13', 'pe14', 'pe15', 'pe16', 'pe17', 'pe18', 'pe19', 'pe20', 'pe21', 'pe22', 'pe23', 'pe24', 'pe25', 'pe26', 'pe27'], 'string', 'max' => 100],
            [['ape3'], 'string', 'max' => 200],
            [['m1', 'mkesim', 'msaran'], 'string', 'max' => 1000],
            [['mcu_id', 'seq'], 'unique', 'targetAttribute' => ['mcu_id', 'seq']],
            [['mcu_id', 'seq'], 'exist', 'skipOnError' => true, 'targetClass' => McuDetExt::className(), 'targetAttribute' => ['mcu_id' => 'mcu_id', 'seq' => 'seq']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mcu_id' => 'Mcu ID',
            'seq' => 'Seq',
            'posted' => 'Posted',
            'cd2' => 'Cd2',
            'cd3' => 'Cd3',
            'cd5' => 'Cd5',
            'e1' => 'E1',
            'e2' => 'E2',
            'e3' => 'E3',
            'e4' => 'E4',
            'e5' => 'E5',
            'e6' => 'E6',
            'e7' => 'E7',
            'e8' => 'E8',
            'e9' => 'E9',
            'e10' => 'e10',
            'e11' => 'E11',
            'e12' => 'E12',
            'e13' => 'E13',
            'e14' => 'E14',
            'e15' => 'E15',
            'e16' => 'E16',
            'e17' => 'E17',
            'e18' => 'E18',
            'e19' => 'E19',
            'e20' => 'e20',
            'e21' => 'E21',
            'e22' => 'E22',
            'e23' => 'E23',
            'e24' => 'E24',
            'e25' => 'E25',
            'e26' => 'E26',
            'e27' => 'E27',
            'e28' => 'E28',
            'e29' => 'E29',
            'e30' => 'e30',
            'e31' => 'E31',
            'e32' => 'E32',
            'e33' => 'E33',
            'e34' => 'E34',
            'e35' => 'E35',
            'e36' => 'E36',
            'e37' => 'E37',
            'e38' => 'E38',
            'e39' => 'E39',
            'e40' => 'e40',
            'e41' => 'E41',
            'ep1' => 'Ep1',
            'ep2' => 'Ep2',
            'ep3' => 'Ep3',
            'ep4' => 'Ep4',
            'ep5' => 'Ep5',
            'ep6' => 'Ep6',
            'ep7' => 'Ep7',
            'ep8' => 'Ep8',
            'ep9' => 'Ep9',
            'ep10' => 'ep10',
            'ep11' => 'Ep11',
            'ep12' => 'Ep12',
            'ep13' => 'Ep13',
            'ep14' => 'Ep14',
            'ep15' => 'Ep15',
            'ep16' => 'Ep16',
            'ep17' => 'Ep17',
            'ep18' => 'Ep18',
            'ep19' => 'Ep19',
            'ep20' => 'ep20',
            'ep21' => 'Ep21',
            'ep22' => 'Ep22',
            'ep23' => 'Ep23',
            'ep24' => 'Ep24',
            'ep25' => 'Ep25',
            'ep26' => 'Ep26',
            'ep27' => 'Ep27',
            'ep28' => 'Ep28',
            'ep29' => 'Ep29',
            'ep30' => 'ep30',
            'ep31' => 'Ep31',
            'ep32' => 'Ep32',
            'ep33' => 'Ep33',
            'ep34' => 'Ep34',
            'ep35' => 'Ep35',
            'ep36' => 'Ep36',
            'ep37' => 'Ep37',
            'ep38' => 'Ep38',
            'ep39' => 'Ep39',
            'ep40' => 'ep40',
            'ep41' => 'Ep41',
            'pe1' => 'Pe1',
            'pe2' => 'Pe2',
            'pe3a' => 'Pe3a',
            'pe3b' => 'Pe3b',
            'pe4' => 'Pe4',
            'pe5' => 'Pe5',
            'pe6' => 'Pe6',
            'pe7' => 'Pe7',
            'pe8' => 'Pe8',
            'pe9' => 'Pe9',
            'pe10' => 'pe10',
            'pe11' => 'Pe11',
            'pe12' => 'Pe12',
            'pe13' => 'Pe13',
            'pe14' => 'Pe14',
            'pe15' => 'Pe15',
            'pe16' => 'Pe16',
            'pe17' => 'Pe17',
            'pe18' => 'Pe18',
            'pe19' => 'Pe19',
            'pe20' => 'pe20',
            'pe21' => 'Pe21',
            'pe22' => 'Pe22',
            'pe23' => 'Pe23',
            'pe24' => 'Pe24',
            'pe25' => 'Pe25',
            'pe26' => 'Pe26',
            'pe27' => 'Pe27',
            'pe28' => 'Pe28',
            'pe29' => 'Pe29',
            'pe30' => 'pe30',
            'pe31' => 'Pe31',
            'pe32' => 'Pe32',
            'pe33' => 'Pe33',
            'pe34' => 'Pe34',
            'pe35' => 'Pe35',
            'pe36' => 'Pe36',
            'ape1' => 'Ape1',
            'ape2' => 'Ape2',
            'ape3' => 'Ape3',
            'm1' => 'M1',
            'mkesim' => 'Mkesim',
            'msaran' => 'Msaran',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
            'modified_user_id' => 'Modified User ID',
            'modified_time' => 'Modified Time',
        ];
    }

    /**
     * Gets query for [[Mcu]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMcu()
    {
        return $this->hasOne(McuDetExt::className(), ['mcu_id' => 'mcu_id', 'seq' => 'seq']);
    }
}
