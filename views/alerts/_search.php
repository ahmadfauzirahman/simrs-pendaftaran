<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlertsSearch */
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

    <?= $form->field($model, 'alert_id') ?>

    <?= $form->field($model, 'report_id') ?>

    <?= $form->field($model, 'alert_name') ?>

    <?= $form->field($model, 'alert_table') ?>

    <?= $form->field($model, 'detail_alert_table') ?>

    <?php // echo $form->field($model, 'detail_alert_field_name') ?>

    <?php // echo $form->field($model, 'detail_alert_field_no') ?>

    <?php // echo $form->field($model, 'alert_auto_width') ?>

    <?php // echo $form->field($model, 'detail_alert_auto_width') ?>

    <?php // echo $form->field($model, 'alert_description') ?>

    <?php // echo $form->field($model, 'show_in_detail') ?>

    <?php // echo $form->field($model, 'show_params') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
