<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmrNotesDetailSearch */
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

    <?= $form->field($model, 'notes_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'notes_heading') ?>

    <?= $form->field($model, 'notes_heading_seq') ?>

    <?= $form->field($model, 'notes_content_type') ?>

    <?php // echo $form->field($model, 'notes_content') ?>

    <?php // echo $form->field($model, 'notes_report_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>