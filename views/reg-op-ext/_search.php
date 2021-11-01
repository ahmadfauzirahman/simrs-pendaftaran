<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegOpExtSearch */
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

    <?= $form->field($model, 'reg_op_id') ?>

    <?= $form->field($model, 'reg_id') ?>

    <?= $form->field($model, 'reg_op_no') ?>

    <?= $form->field($model, 'date_op') ?>

    <?= $form->field($model, 'diag_medis_id') ?>

    <?php // echo $form->field($model, 'tind_medis_id') ?>

    <?php // echo $form->field($model, 'ot_1') ?>

    <?php // echo $form->field($model, 'ot_2') ?>

    <?php // echo $form->field($model, 'ot_3') ?>

    <?php // echo $form->field($model, 'ot_4') ?>

    <?php // echo $form->field($model, 'ot_5') ?>

    <?php // echo $form->field($model, 'ot_6') ?>

    <?php // echo $form->field($model, 'a_1') ?>

    <?php // echo $form->field($model, 'a_2') ?>

    <?php // echo $form->field($model, 'a_3') ?>

    <?php // echo $form->field($model, 'a_4') ?>

    <?php // echo $form->field($model, 'g_1') ?>

    <?php // echo $form->field($model, 'g_2') ?>

    <?php // echo $form->field($model, 'g_3') ?>

    <?php // echo $form->field($model, 'g_4') ?>

    <?php // echo $form->field($model, 'g_5') ?>

    <?php // echo $form->field($model, 'am_1') ?>

    <?php // echo $form->field($model, 'am_2') ?>

    <?php // echo $form->field($model, 'am_3') ?>

    <?php // echo $form->field($model, 'am_4') ?>

    <?php // echo $form->field($model, 'am_5') ?>

    <?php // echo $form->field($model, 'am_6') ?>

    <?php // echo $form->field($model, 'am_7') ?>

    <?php // echo $form->field($model, 'am_8') ?>

    <?php // echo $form->field($model, 'time_op1') ?>

    <?php // echo $form->field($model, 'time_op2') ?>

    <?php // echo $form->field($model, 'time_op3') ?>

    <?php // echo $form->field($model, 'staff_kons') ?>

    <?php // echo $form->field($model, 'staff_op') ?>

    <?php // echo $form->field($model, 'staff_anes') ?>

    <?php // echo $form->field($model, 'staff_panes') ?>

    <?php // echo $form->field($model, 'staff_anak') ?>

    <?php // echo $form->field($model, 'asisten_id') ?>

    <?php // echo $form->field($model, 'instrument_id') ?>

    <?php // echo $form->field($model, 'on_loop') ?>

    <?php // echo $form->field($model, 'sa_1') ?>

    <?php // echo $form->field($model, 'sa_2') ?>

    <?php // echo $form->field($model, 'ods_1') ?>

    <?php // echo $form->field($model, 'ods_2') ?>

    <?php // echo $form->field($model, 'ods_3') ?>

    <?php // echo $form->field($model, 'pj_id') ?>

    <?php // echo $form->field($model, 'rr_id') ?>

    <?php // echo $form->field($model, 'pa') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'spes_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
