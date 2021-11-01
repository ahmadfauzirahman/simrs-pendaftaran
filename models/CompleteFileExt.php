<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "complete_file_ext".
 *
 * @property int $reg_id
 * @property int|null $staff_id
 * @property string|null $date_receive_file
 * @property string|null $date_start_ri
 * @property string|null $date_end_ri
 * @property int|null $r_j
 * @property int|null $r_k
 * @property int|null $r_l
 * @property int|null $r_m
 * @property int|null $r_n
 * @property int|null $r_o
 * @property int|null $r_p
 * @property int|null $r_q
 * @property int|null $r_r
 * @property int|null $r_s
 * @property int|null $r_t
 * @property int|null $r_u
 * @property int|null $r_v
 * @property int|null $r_w
 * @property int|null $r_x
 * @property int|null $r_y
 * @property int|null $r_z
 * @property int|null $r_aa
 * @property int|null $r_ab
 * @property int|null $r_ac
 * @property int|null $r_ad
 * @property int|null $r_ae
 * @property int|null $r_af
 * @property int|null $r_ag
 * @property int|null $r_ah
 * @property int|null $r_ai
 * @property int|null $r_aj
 * @property string|null $r_ak
 * @property string|null $r_al
 * @property int|null $r_am
 * @property int|null $o_i
 * @property int|null $o_j
 * @property int|null $o_k
 * @property int|null $o_l
 * @property int|null $o_m
 * @property int|null $o_n
 * @property int|null $o_o
 * @property int|null $o_p
 * @property int|null $o_q
 * @property int|null $o_r
 * @property int|null $o_s
 * @property int|null $o_t
 * @property int|null $o_u
 * @property int|null $o_v
 * @property int|null $o_w
 * @property int|null $o_x
 * @property int|null $o_y
 * @property int|null $o_z
 * @property int|null $o_aa
 * @property string|null $o_ab
 * @property int|null $o_ac
 * @property int|null $o_ad
 * @property int|null $o_ae
 * @property int|null $o_af
 * @property int|null $a_i
 * @property int|null $a_j
 * @property int|null $a_k
 * @property int|null $a_l
 * @property int|null $a_m
 * @property int|null $a_n
 * @property int|null $a_o
 * @property int|null $a_p
 * @property int|null $a_q
 * @property int|null $a_r
 * @property int|null $a_s
 * @property int|null $a_t
 * @property int|null $a_u
 * @property int|null $a_v
 * @property int|null $a_w
 * @property int|null $a_x
 * @property int|null $a_y
 * @property int|null $a_z
 * @property int|null $a_aa
 * @property int|null $a_ab
 * @property int|null $a_ac
 * @property int|null $a_ad
 * @property int|null $a_ae
 * @property int|null $a_af
 * @property int|null $a_ag
 * @property int|null $a_ah
 * @property int|null $a_ai
 * @property int|null $a_aj
 * @property int|null $a_ak
 * @property int|null $a_al
 * @property int|null $a_am
 * @property int|null $a_an
 * @property int|null $a_ao
 * @property int|null $a_ap
 * @property int|null $a_aq
 * @property int|null $a_ar
 * @property int|null $i_i
 * @property int|null $i_j
 * @property int|null $i_k
 * @property int|null $i_l
 * @property int|null $i_m
 * @property int|null $i_n
 * @property int|null $i_o
 * @property int|null $i_p
 * @property int|null $i_q
 * @property int|null $i_r
 * @property int|null $i_s
 * @property int|null $i_t
 * @property int|null $i_u
 * @property int|null $i_v
 * @property int|null $i_w
 * @property int|null $i_x
 * @property int|null $i_y
 * @property int|null $i_z
 * @property int|null $i_aa
 * @property int|null $i_ab
 * @property int|null $i_ac
 * @property int|null $i_ad
 * @property int|null $i_ae
 * @property int|null $i_af
 * @property int|null $i_ag
 * @property int|null $i_ah
 * @property int|null $i_ai
 * @property int|null $i_aj
 * @property int|null $i_ak
 * @property int|null $t_j
 * @property int|null $t_k
 * @property int|null $t_l
 * @property int|null $t_m
 * @property int|null $t_n
 * @property int|null $t_o
 * @property int|null $t_p
 * @property int|null $t_q
 * @property int|null $t_r
 * @property int|null $t_s
 * @property int|null $t_t
 * @property int|null $t_u
 * @property int|null $t_v
 * @property int|null $t_w
 * @property int|null $t_x
 * @property int|null $t_y
 * @property int|null $t_z
 * @property int|null $t_aa
 * @property int|null $t_ab
 * @property int|null $t_ac
 * @property int|null $t_ad
 * @property int|null $t_ae
 * @property int|null $t_af
 * @property int|null $t_ag
 * @property int|null $t_ah
 * @property int|null $t_ai
 * @property int|null $t_aj
 * @property int|null $t_ak
 * @property int|null $t_al
 * @property int|null $aa_j
 * @property int|null $aa_k
 * @property int|null $aa_l
 * @property int|null $aa_m
 * @property int|null $aa_n
 * @property int|null $aa_o
 * @property int|null $aa_p
 * @property int|null $aa_q
 * @property int|null $aa_r
 * @property int|null $aa_s
 * @property int|null $aa_t
 * @property int|null $aa_u
 * @property int|null $aa_v
 * @property int|null $aa_w
 * @property int|null $aa_x
 * @property int|null $aa_y
 * @property int|null $aa_z
 * @property int|null $aa_aa
 * @property int|null $aa_ab
 * @property int|null $aa_ac
 * @property int|null $aa_ad
 * @property int|null $aa_ae
 * @property int|null $aa_af
 * @property int|null $aa_ag
 * @property int|null $aa_ah
 * @property int|null $aa_ai
 * @property int|null $aa_aj
 * @property int|null $aa_ak
 * @property int|null $aa_al
 * @property int|null $aa_am
 * @property int|null $aa_an
 * @property int|null $aa_ao
 * @property int|null $aa_ap
 * @property int|null $aa_aq
 * @property int|null $aa_ar
 * @property int|null $r_cp
 * @property string|null $r_date_cp
 * @property int|null $o_cp
 * @property string|null $o_date_cp
 * @property int|null $a_cp
 * @property string|null $a_date_cp
 * @property int|null $i_cp
 * @property string|null $i_date_cp
 * @property int|null $t_cp
 * @property string|null $t_date_cp
 * @property int|null $aa_cp
 * @property string|null $aa_date_cp
 * @property int|null $created_user_id
 * @property string|null $created_time
 *
 * @property Registration $reg
 * @property ScrtUser $createdUser
 */
class CompleteFileExt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'complete_file_ext';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id'], 'required'],
            [['reg_id', 'staff_id', 'r_j', 'r_k', 'r_l', 'r_m', 'r_n', 'r_o', 'r_p', 'r_q', 'r_r', 'r_s', 'r_t', 'r_u', 'r_v', 'r_w', 'r_x', 'r_y', 'r_z', 'r_aa', 'r_ab', 'r_ac', 'r_ad', 'r_ae', 'r_af', 'r_ag', 'r_ah', 'r_ai', 'r_aj', 'r_am', 'o_i', 'o_j', 'o_k', 'o_l', 'o_m', 'o_n', 'o_o', 'o_p', 'o_q', 'o_r', 'o_s', 'o_t', 'o_u', 'o_v', 'o_w', 'o_x', 'o_y', 'o_z', 'o_aa', 'o_ac', 'o_ad', 'o_ae', 'o_af', 'a_i', 'a_j', 'a_k', 'a_l', 'a_m', 'a_n', 'a_o', 'a_p', 'a_q', 'a_r', 'a_s', 'a_t', 'a_u', 'a_v', 'a_w', 'a_x', 'a_y', 'a_z', 'a_aa', 'a_ab', 'a_ac', 'a_ad', 'a_ae', 'a_af', 'a_ag', 'a_ah', 'a_ai', 'a_aj', 'a_ak', 'a_al', 'a_am', 'a_an', 'a_ao', 'a_ap', 'a_aq', 'a_ar', 'i_i', 'i_j', 'i_k', 'i_l', 'i_m', 'i_n', 'i_o', 'i_p', 'i_q', 'i_r', 'i_s', 'i_t', 'i_u', 'i_v', 'i_w', 'i_x', 'i_y', 'i_z', 'i_aa', 'i_ab', 'i_ac', 'i_ad', 'i_ae', 'i_af', 'i_ag', 'i_ah', 'i_ai', 'i_aj', 'i_ak', 't_j', 't_k', 't_l', 't_m', 't_n', 't_o', 't_p', 't_q', 't_r', 't_s', 't_t', 't_u', 't_v', 't_w', 't_x', 't_y', 't_z', 't_aa', 't_ab', 't_ac', 't_ad', 't_ae', 't_af', 't_ag', 't_ah', 't_ai', 't_aj', 't_ak', 't_al', 'aa_j', 'aa_k', 'aa_l', 'aa_m', 'aa_n', 'aa_o', 'aa_p', 'aa_q', 'aa_r', 'aa_s', 'aa_t', 'aa_u', 'aa_v', 'aa_w', 'aa_x', 'aa_y', 'aa_z', 'aa_aa', 'aa_ab', 'aa_ac', 'aa_ad', 'aa_ae', 'aa_af', 'aa_ag', 'aa_ah', 'aa_ai', 'aa_aj', 'aa_ak', 'aa_al', 'aa_am', 'aa_an', 'aa_ao', 'aa_ap', 'aa_aq', 'aa_ar', 'r_cp', 'o_cp', 'a_cp', 'i_cp', 't_cp', 'aa_cp', 'created_user_id'], 'integer'],
            [['date_receive_file', 'date_start_ri', 'date_end_ri', 'r_date_cp', 'o_date_cp', 'a_date_cp', 'i_date_cp', 't_date_cp', 'aa_date_cp', 'created_time'], 'safe'],
            [['r_ak', 'r_al'], 'string', 'max' => 60],
            [['o_ab'], 'string', 'max' => 20],
            [['reg_id'], 'unique'],
            [['reg_id'], 'exist', 'skipOnError' => true, 'targetClass' => Registration::className(), 'targetAttribute' => ['reg_id' => 'registration_id']],
            [['created_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => ScrtUser::className(), 'targetAttribute' => ['created_user_id' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_id' => 'Reg ID',
            'staff_id' => 'Staff ID',
            'date_receive_file' => 'Date Receive File',
            'date_start_ri' => 'Date Start Ri',
            'date_end_ri' => 'Date End Ri',
            'r_j' => 'R J',
            'r_k' => 'R K',
            'r_l' => 'R L',
            'r_m' => 'R M',
            'r_n' => 'R N',
            'r_o' => 'R O',
            'r_p' => 'R P',
            'r_q' => 'R Q',
            'r_r' => 'R R',
            'r_s' => 'R S',
            'r_t' => 'R T',
            'r_u' => 'R U',
            'r_v' => 'R V',
            'r_w' => 'R W',
            'r_x' => 'R X',
            'r_y' => 'R Y',
            'r_z' => 'R Z',
            'r_aa' => 'R Aa',
            'r_ab' => 'R Ab',
            'r_ac' => 'R Ac',
            'r_ad' => 'R Ad',
            'r_ae' => 'R Ae',
            'r_af' => 'R Af',
            'r_ag' => 'R Ag',
            'r_ah' => 'R Ah',
            'r_ai' => 'R Ai',
            'r_aj' => 'R Aj',
            'r_ak' => 'R Ak',
            'r_al' => 'R Al',
            'r_am' => 'R Am',
            'o_i' => 'O I',
            'o_j' => 'O J',
            'o_k' => 'O K',
            'o_l' => 'O L',
            'o_m' => 'O M',
            'o_n' => 'O N',
            'o_o' => 'O O',
            'o_p' => 'O P',
            'o_q' => 'O Q',
            'o_r' => 'O R',
            'o_s' => 'O S',
            'o_t' => 'O T',
            'o_u' => 'O U',
            'o_v' => 'O V',
            'o_w' => 'O W',
            'o_x' => 'O X',
            'o_y' => 'O Y',
            'o_z' => 'O Z',
            'o_aa' => 'O Aa',
            'o_ab' => 'O Ab',
            'o_ac' => 'O Ac',
            'o_ad' => 'O Ad',
            'o_ae' => 'O Ae',
            'o_af' => 'O Af',
            'a_i' => 'A I',
            'a_j' => 'A J',
            'a_k' => 'A K',
            'a_l' => 'A L',
            'a_m' => 'A M',
            'a_n' => 'A N',
            'a_o' => 'A O',
            'a_p' => 'A P',
            'a_q' => 'A Q',
            'a_r' => 'A R',
            'a_s' => 'A S',
            'a_t' => 'A T',
            'a_u' => 'A U',
            'a_v' => 'A V',
            'a_w' => 'A W',
            'a_x' => 'A X',
            'a_y' => 'A Y',
            'a_z' => 'A Z',
            'a_aa' => 'A Aa',
            'a_ab' => 'A Ab',
            'a_ac' => 'A Ac',
            'a_ad' => 'A Ad',
            'a_ae' => 'A Ae',
            'a_af' => 'A Af',
            'a_ag' => 'A Ag',
            'a_ah' => 'A Ah',
            'a_ai' => 'A Ai',
            'a_aj' => 'A Aj',
            'a_ak' => 'A Ak',
            'a_al' => 'A Al',
            'a_am' => 'A Am',
            'a_an' => 'A An',
            'a_ao' => 'A Ao',
            'a_ap' => 'A Ap',
            'a_aq' => 'A Aq',
            'a_ar' => 'A Ar',
            'i_i' => 'I I',
            'i_j' => 'I J',
            'i_k' => 'I K',
            'i_l' => 'I L',
            'i_m' => 'I M',
            'i_n' => 'I N',
            'i_o' => 'I O',
            'i_p' => 'I P',
            'i_q' => 'I Q',
            'i_r' => 'I R',
            'i_s' => 'I S',
            'i_t' => 'I T',
            'i_u' => 'I U',
            'i_v' => 'I V',
            'i_w' => 'I W',
            'i_x' => 'I X',
            'i_y' => 'I Y',
            'i_z' => 'I Z',
            'i_aa' => 'I Aa',
            'i_ab' => 'I Ab',
            'i_ac' => 'I Ac',
            'i_ad' => 'I Ad',
            'i_ae' => 'I Ae',
            'i_af' => 'I Af',
            'i_ag' => 'I Ag',
            'i_ah' => 'I Ah',
            'i_ai' => 'I Ai',
            'i_aj' => 'I Aj',
            'i_ak' => 'I Ak',
            't_j' => 'T J',
            't_k' => 'T K',
            't_l' => 'T L',
            't_m' => 'T M',
            't_n' => 'T N',
            't_o' => 'T O',
            't_p' => 'T P',
            't_q' => 'T Q',
            't_r' => 'T R',
            't_s' => 'T S',
            't_t' => 'T T',
            't_u' => 'T U',
            't_v' => 'T V',
            't_w' => 'T W',
            't_x' => 'T X',
            't_y' => 'T Y',
            't_z' => 'T Z',
            't_aa' => 'T Aa',
            't_ab' => 'T Ab',
            't_ac' => 'T Ac',
            't_ad' => 'T Ad',
            't_ae' => 'T Ae',
            't_af' => 'T Af',
            't_ag' => 'T Ag',
            't_ah' => 'T Ah',
            't_ai' => 'T Ai',
            't_aj' => 'T Aj',
            't_ak' => 'T Ak',
            't_al' => 'T Al',
            'aa_j' => 'Aa J',
            'aa_k' => 'Aa K',
            'aa_l' => 'Aa L',
            'aa_m' => 'Aa M',
            'aa_n' => 'Aa N',
            'aa_o' => 'Aa O',
            'aa_p' => 'Aa P',
            'aa_q' => 'Aa Q',
            'aa_r' => 'Aa R',
            'aa_s' => 'Aa S',
            'aa_t' => 'Aa T',
            'aa_u' => 'Aa U',
            'aa_v' => 'Aa V',
            'aa_w' => 'Aa W',
            'aa_x' => 'Aa X',
            'aa_y' => 'Aa Y',
            'aa_z' => 'Aa Z',
            'aa_aa' => 'Aa Aa',
            'aa_ab' => 'Aa Ab',
            'aa_ac' => 'Aa Ac',
            'aa_ad' => 'Aa Ad',
            'aa_ae' => 'Aa Ae',
            'aa_af' => 'Aa Af',
            'aa_ag' => 'Aa Ag',
            'aa_ah' => 'Aa Ah',
            'aa_ai' => 'Aa Ai',
            'aa_aj' => 'Aa Aj',
            'aa_ak' => 'Aa Ak',
            'aa_al' => 'Aa Al',
            'aa_am' => 'Aa Am',
            'aa_an' => 'Aa An',
            'aa_ao' => 'Aa Ao',
            'aa_ap' => 'Aa Ap',
            'aa_aq' => 'Aa Aq',
            'aa_ar' => 'Aa Ar',
            'r_cp' => 'R Cp',
            'r_date_cp' => 'R Date Cp',
            'o_cp' => 'O Cp',
            'o_date_cp' => 'O Date Cp',
            'a_cp' => 'A Cp',
            'a_date_cp' => 'A Date Cp',
            'i_cp' => 'I Cp',
            'i_date_cp' => 'I Date Cp',
            't_cp' => 'T Cp',
            't_date_cp' => 'T Date Cp',
            'aa_cp' => 'Aa Cp',
            'aa_date_cp' => 'Aa Date Cp',
            'created_user_id' => 'Created User ID',
            'created_time' => 'Created Time',
        ];
    }

    /**
     * Gets query for [[Reg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReg()
    {
        return $this->hasOne(Registration::className(), ['registration_id' => 'reg_id']);
    }

    /**
     * Gets query for [[CreatedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedUser()
    {
        return $this->hasOne(ScrtUser::className(), ['user_id' => 'created_user_id']);
    }
}
