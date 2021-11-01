<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UnitSearch */
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

    <?= $form->field($model, 'unit_id') ?>

    <?= $form->field($model, 'dept_id') ?>

    <?= $form->field($model, 'unit_name') ?>

    <?= $form->field($model, 'sub_unit_caption') ?>

    <?= $form->field($model, 'person_in_charge') ?>

    <?php // echo $form->field($model, 'status_available') ?>

    <?php // echo $form->field($model, 'status_used') ?>

    <?php // echo $form->field($model, 'status_housekeep') ?>

    <?php // echo $form->field($model, 'status_maintenance') ?>

    <?php // echo $form->field($model, 'sub_unit_availability') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'small_icon') ?>

    <?php // echo $form->field($model, 'large_icon') ?>

    <?php // echo $form->field($model, 'tax1_id') ?>

    <?php // echo $form->field($model, 'tax2_id') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'med_status_open') ?>

    <?php // echo $form->field($model, 'med_status_close') ?>

    <?php // echo $form->field($model, 'patient_ar_gl_acc_id') ?>

    <?php // echo $form->field($model, 'order_entry_after_reg') ?>

    <?php // echo $form->field($model, 'readonly_order_entry') ?>

    <?php // echo $form->field($model, 'gl_jtype_id') ?>

    <?php // echo $form->field($model, 'undetermined_end_servicedate') ?>

    <?php // echo $form->field($model, 'refer_unit_code') ?>

    <?php // echo $form->field($model, 'use_web_reservation') ?>

    <?php // echo $form->field($model, 'q_no') ?>

    <?php // echo $form->field($model, 'q_date') ?>

    <?php // echo $form->field($model, 'q_play') ?>

    <?php // echo $form->field($model, 'q_view') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'q_mark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
