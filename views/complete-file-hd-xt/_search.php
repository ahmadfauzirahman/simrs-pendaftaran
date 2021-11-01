<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CompleteFileHdXtSearch */
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

    <?= $form->field($model, 'date_start_hd') ?>

    <?= $form->field($model, 'h_1') ?>

    <?php // echo $form->field($model, 'h_2') ?>

    <?php // echo $form->field($model, 'h_3') ?>

    <?php // echo $form->field($model, 'h_4') ?>

    <?php // echo $form->field($model, 'h_5') ?>

    <?php // echo $form->field($model, 'h_6') ?>

    <?php // echo $form->field($model, 'h_7') ?>

    <?php // echo $form->field($model, 'h_8') ?>

    <?php // echo $form->field($model, 'h_9') ?>

    <?php // echo $form->field($model, 'h_10') ?>

    <?php // echo $form->field($model, 'h_11') ?>

    <?php // echo $form->field($model, 'h_12') ?>

    <?php // echo $form->field($model, 'h_cp') ?>

    <?php // echo $form->field($model, 'h_date_cp') ?>

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
