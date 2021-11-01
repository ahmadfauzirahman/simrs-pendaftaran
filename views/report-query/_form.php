<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReportQuery */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="report-query-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'report_id')->textInput() ?>

    <?= $form->field($model, 'query_id')->textInput() ?>

    <?= $form->field($model, 'query_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sql_syntax')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'master_query_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
