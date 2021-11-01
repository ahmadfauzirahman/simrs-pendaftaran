<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamSearch */
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

    <?= $form->field($model, 'exam_id') ?>

    <?= $form->field($model, 'exam_name') ?>

    <?= $form->field($model, 'report_seq') ?>

    <?= $form->field($model, 'exam_value') ?>

    <?= $form->field($model, 'exam_method') ?>

    <?php // echo $form->field($model, 'int_ip_address') ?>

    <?php // echo $form->field($model, 'equipment_id') ?>

    <?php // echo $form->field($model, 'test_id') ?>

    <?php // echo $form->field($model, 'header_format') ?>

    <?php // echo $form->field($model, 'kategori1') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'exam_type') ?>

    <?php // echo $form->field($model, 'uom') ?>

    <?php // echo $form->field($model, 'item_id') ?>

    <?php // echo $form->field($model, 'exam_name_en') ?>

    <?php // echo $form->field($model, 'test_id_en') ?>

    <?php // echo $form->field($model, 'header_format_en') ?>

    <?php // echo $form->field($model, 'exam_result_m') ?>

    <?php // echo $form->field($model, 'exam_result_f') ?>

    <?php // echo $form->field($model, 'print_seq') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
