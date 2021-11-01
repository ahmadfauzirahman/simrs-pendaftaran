<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReportSearch */
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

    <?= $form->field($model, 'report_id') ?>

    <?= $form->field($model, 'report_name') ?>

    <?= $form->field($model, 'report_group_id') ?>

    <?= $form->field($model, 'report_type') ?>

    <?= $form->field($model, 'is_group') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'report_data') ?>

    <?php // echo $form->field($model, 'category_id') ?>

    <?php // echo $form->field($model, 'keyword') ?>

    <?php // echo $form->field($model, 'main_query_id') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'sample_picture') ?>

    <?php // echo $form->field($model, 'sql_after_print') ?>

    <?php // echo $form->field($model, 'url_before_print') ?>

    <?php // echo $form->field($model, 'url_before_print_show') ?>

    <?php // echo $form->field($model, 'url_before_print_x') ?>

    <?php // echo $form->field($model, 'url_before_print_y') ?>

    <?php // echo $form->field($model, 'url_after_print') ?>

    <?php // echo $form->field($model, 'url_after_print_show') ?>

    <?php // echo $form->field($model, 'url_after_print_x') ?>

    <?php // echo $form->field($model, 'url_after_print_y') ?>

    <?php // echo $form->field($model, 'email_subject') ?>

    <?php // echo $form->field($model, 'email_body') ?>

    <?php // echo $form->field($model, 'email_every') ?>

    <?php // echo $form->field($model, 'last_execute') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
