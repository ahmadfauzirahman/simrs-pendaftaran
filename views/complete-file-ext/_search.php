<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompleteFileExtSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'reg_id') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'date_receive_file') ?>

    <?= $form->field($model, 'date_start_ri') ?>

    <?= $form->field($model, 'date_end_ri') ?>

    <?php // echo $form->field($model, 'r_j') ?>

    <?php // echo $form->field($model, 'r_k') ?>

    <?php // echo $form->field($model, 'r_l') ?>

    <?php // echo $form->field($model, 'r_m') ?>

    <?php // echo $form->field($model, 'r_n') ?>

    <?php // echo $form->field($model, 'r_o') ?>

    <?php // echo $form->field($model, 'r_p') ?>

    <?php // echo $form->field($model, 'r_q') ?>

    <?php // echo $form->field($model, 'r_r') ?>

    <?php // echo $form->field($model, 'r_s') ?>

    <?php // echo $form->field($model, 'r_t') ?>

    <?php // echo $form->field($model, 'r_u') ?>

    <?php // echo $form->field($model, 'r_v') ?>

    <?php // echo $form->field($model, 'r_w') ?>

    <?php // echo $form->field($model, 'r_x') ?>

    <?php // echo $form->field($model, 'r_y') ?>

    <?php // echo $form->field($model, 'r_z') ?>

    <?php // echo $form->field($model, 'r_aa') ?>

    <?php // echo $form->field($model, 'r_ab') ?>

    <?php // echo $form->field($model, 'r_ac') ?>

    <?php // echo $form->field($model, 'r_ad') ?>

    <?php // echo $form->field($model, 'r_ae') ?>

    <?php // echo $form->field($model, 'r_af') ?>

    <?php // echo $form->field($model, 'r_ag') ?>

    <?php // echo $form->field($model, 'r_ah') ?>

    <?php // echo $form->field($model, 'r_ai') ?>

    <?php // echo $form->field($model, 'r_aj') ?>

    <?php // echo $form->field($model, 'r_ak') ?>

    <?php // echo $form->field($model, 'r_al') ?>

    <?php // echo $form->field($model, 'r_am') ?>

    <?php // echo $form->field($model, 'o_i') ?>

    <?php // echo $form->field($model, 'o_j') ?>

    <?php // echo $form->field($model, 'o_k') ?>

    <?php // echo $form->field($model, 'o_l') ?>

    <?php // echo $form->field($model, 'o_m') ?>

    <?php // echo $form->field($model, 'o_n') ?>

    <?php // echo $form->field($model, 'o_o') ?>

    <?php // echo $form->field($model, 'o_p') ?>

    <?php // echo $form->field($model, 'o_q') ?>

    <?php // echo $form->field($model, 'o_r') ?>

    <?php // echo $form->field($model, 'o_s') ?>

    <?php // echo $form->field($model, 'o_t') ?>

    <?php // echo $form->field($model, 'o_u') ?>

    <?php // echo $form->field($model, 'o_v') ?>

    <?php // echo $form->field($model, 'o_w') ?>

    <?php // echo $form->field($model, 'o_x') ?>

    <?php // echo $form->field($model, 'o_y') ?>

    <?php // echo $form->field($model, 'o_z') ?>

    <?php // echo $form->field($model, 'o_aa') ?>

    <?php // echo $form->field($model, 'o_ab') ?>

    <?php // echo $form->field($model, 'o_ac') ?>

    <?php // echo $form->field($model, 'o_ad') ?>

    <?php // echo $form->field($model, 'o_ae') ?>

    <?php // echo $form->field($model, 'o_af') ?>

    <?php // echo $form->field($model, 'a_i') ?>

    <?php // echo $form->field($model, 'a_j') ?>

    <?php // echo $form->field($model, 'a_k') ?>

    <?php // echo $form->field($model, 'a_l') ?>

    <?php // echo $form->field($model, 'a_m') ?>

    <?php // echo $form->field($model, 'a_n') ?>

    <?php // echo $form->field($model, 'a_o') ?>

    <?php // echo $form->field($model, 'a_p') ?>

    <?php // echo $form->field($model, 'a_q') ?>

    <?php // echo $form->field($model, 'a_r') ?>

    <?php // echo $form->field($model, 'a_s') ?>

    <?php // echo $form->field($model, 'a_t') ?>

    <?php // echo $form->field($model, 'a_u') ?>

    <?php // echo $form->field($model, 'a_v') ?>

    <?php // echo $form->field($model, 'a_w') ?>

    <?php // echo $form->field($model, 'a_x') ?>

    <?php // echo $form->field($model, 'a_y') ?>

    <?php // echo $form->field($model, 'a_z') ?>

    <?php // echo $form->field($model, 'a_aa') ?>

    <?php // echo $form->field($model, 'a_ab') ?>

    <?php // echo $form->field($model, 'a_ac') ?>

    <?php // echo $form->field($model, 'a_ad') ?>

    <?php // echo $form->field($model, 'a_ae') ?>

    <?php // echo $form->field($model, 'a_af') ?>

    <?php // echo $form->field($model, 'a_ag') ?>

    <?php // echo $form->field($model, 'a_ah') ?>

    <?php // echo $form->field($model, 'a_ai') ?>

    <?php // echo $form->field($model, 'a_aj') ?>

    <?php // echo $form->field($model, 'a_ak') ?>

    <?php // echo $form->field($model, 'a_al') ?>

    <?php // echo $form->field($model, 'a_am') ?>

    <?php // echo $form->field($model, 'a_an') ?>

    <?php // echo $form->field($model, 'a_ao') ?>

    <?php // echo $form->field($model, 'a_ap') ?>

    <?php // echo $form->field($model, 'a_aq') ?>

    <?php // echo $form->field($model, 'a_ar') ?>

    <?php // echo $form->field($model, 'i_i') ?>

    <?php // echo $form->field($model, 'i_j') ?>

    <?php // echo $form->field($model, 'i_k') ?>

    <?php // echo $form->field($model, 'i_l') ?>

    <?php // echo $form->field($model, 'i_m') ?>

    <?php // echo $form->field($model, 'i_n') ?>

    <?php // echo $form->field($model, 'i_o') ?>

    <?php // echo $form->field($model, 'i_p') ?>

    <?php // echo $form->field($model, 'i_q') ?>

    <?php // echo $form->field($model, 'i_r') ?>

    <?php // echo $form->field($model, 'i_s') ?>

    <?php // echo $form->field($model, 'i_t') ?>

    <?php // echo $form->field($model, 'i_u') ?>

    <?php // echo $form->field($model, 'i_v') ?>

    <?php // echo $form->field($model, 'i_w') ?>

    <?php // echo $form->field($model, 'i_x') ?>

    <?php // echo $form->field($model, 'i_y') ?>

    <?php // echo $form->field($model, 'i_z') ?>

    <?php // echo $form->field($model, 'i_aa') ?>

    <?php // echo $form->field($model, 'i_ab') ?>

    <?php // echo $form->field($model, 'i_ac') ?>

    <?php // echo $form->field($model, 'i_ad') ?>

    <?php // echo $form->field($model, 'i_ae') ?>

    <?php // echo $form->field($model, 'i_af') ?>

    <?php // echo $form->field($model, 'i_ag') ?>

    <?php // echo $form->field($model, 'i_ah') ?>

    <?php // echo $form->field($model, 'i_ai') ?>

    <?php // echo $form->field($model, 'i_aj') ?>

    <?php // echo $form->field($model, 'i_ak') ?>

    <?php // echo $form->field($model, 't_j') ?>

    <?php // echo $form->field($model, 't_k') ?>

    <?php // echo $form->field($model, 't_l') ?>

    <?php // echo $form->field($model, 't_m') ?>

    <?php // echo $form->field($model, 't_n') ?>

    <?php // echo $form->field($model, 't_o') ?>

    <?php // echo $form->field($model, 't_p') ?>

    <?php // echo $form->field($model, 't_q') ?>

    <?php // echo $form->field($model, 't_r') ?>

    <?php // echo $form->field($model, 't_s') ?>

    <?php // echo $form->field($model, 't_t') ?>

    <?php // echo $form->field($model, 't_u') ?>

    <?php // echo $form->field($model, 't_v') ?>

    <?php // echo $form->field($model, 't_w') ?>

    <?php // echo $form->field($model, 't_x') ?>

    <?php // echo $form->field($model, 't_y') ?>

    <?php // echo $form->field($model, 't_z') ?>

    <?php // echo $form->field($model, 't_aa') ?>

    <?php // echo $form->field($model, 't_ab') ?>

    <?php // echo $form->field($model, 't_ac') ?>

    <?php // echo $form->field($model, 't_ad') ?>

    <?php // echo $form->field($model, 't_ae') ?>

    <?php // echo $form->field($model, 't_af') ?>

    <?php // echo $form->field($model, 't_ag') ?>

    <?php // echo $form->field($model, 't_ah') ?>

    <?php // echo $form->field($model, 't_ai') ?>

    <?php // echo $form->field($model, 't_aj') ?>

    <?php // echo $form->field($model, 't_ak') ?>

    <?php // echo $form->field($model, 't_al') ?>

    <?php // echo $form->field($model, 'aa_j') ?>

    <?php // echo $form->field($model, 'aa_k') ?>

    <?php // echo $form->field($model, 'aa_l') ?>

    <?php // echo $form->field($model, 'aa_m') ?>

    <?php // echo $form->field($model, 'aa_n') ?>

    <?php // echo $form->field($model, 'aa_o') ?>

    <?php // echo $form->field($model, 'aa_p') ?>

    <?php // echo $form->field($model, 'aa_q') ?>

    <?php // echo $form->field($model, 'aa_r') ?>

    <?php // echo $form->field($model, 'aa_s') ?>

    <?php // echo $form->field($model, 'aa_t') ?>

    <?php // echo $form->field($model, 'aa_u') ?>

    <?php // echo $form->field($model, 'aa_v') ?>

    <?php // echo $form->field($model, 'aa_w') ?>

    <?php // echo $form->field($model, 'aa_x') ?>

    <?php // echo $form->field($model, 'aa_y') ?>

    <?php // echo $form->field($model, 'aa_z') ?>

    <?php // echo $form->field($model, 'aa_aa') ?>

    <?php // echo $form->field($model, 'aa_ab') ?>

    <?php // echo $form->field($model, 'aa_ac') ?>

    <?php // echo $form->field($model, 'aa_ad') ?>

    <?php // echo $form->field($model, 'aa_ae') ?>

    <?php // echo $form->field($model, 'aa_af') ?>

    <?php // echo $form->field($model, 'aa_ag') ?>

    <?php // echo $form->field($model, 'aa_ah') ?>

    <?php // echo $form->field($model, 'aa_ai') ?>

    <?php // echo $form->field($model, 'aa_aj') ?>

    <?php // echo $form->field($model, 'aa_ak') ?>

    <?php // echo $form->field($model, 'aa_al') ?>

    <?php // echo $form->field($model, 'aa_am') ?>

    <?php // echo $form->field($model, 'aa_an') ?>

    <?php // echo $form->field($model, 'aa_ao') ?>

    <?php // echo $form->field($model, 'aa_ap') ?>

    <?php // echo $form->field($model, 'aa_aq') ?>

    <?php // echo $form->field($model, 'aa_ar') ?>

    <?php // echo $form->field($model, 'r_cp') ?>

    <?php // echo $form->field($model, 'r_date_cp') ?>

    <?php // echo $form->field($model, 'o_cp') ?>

    <?php // echo $form->field($model, 'o_date_cp') ?>

    <?php // echo $form->field($model, 'a_cp') ?>

    <?php // echo $form->field($model, 'a_date_cp') ?>

    <?php // echo $form->field($model, 'i_cp') ?>

    <?php // echo $form->field($model, 'i_date_cp') ?>

    <?php // echo $form->field($model, 't_cp') ?>

    <?php // echo $form->field($model, 't_date_cp') ?>

    <?php // echo $form->field($model, 'aa_cp') ?>

    <?php // echo $form->field($model, 'aa_date_cp') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
