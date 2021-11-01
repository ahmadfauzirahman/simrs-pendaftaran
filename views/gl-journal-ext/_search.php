<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalExtSearch */
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

    <?= $form->field($model, 'j_id') ?>

    <?= $form->field($model, 'j_no') ?>

    <?= $form->field($model, 'j_date') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'gl_periode') ?>

    <?php // echo $form->field($model, 'gl_year') ?>

    <?php // echo $form->field($model, 'gl_balance') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'completed') ?>

    <?php // echo $form->field($model, 'pc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
