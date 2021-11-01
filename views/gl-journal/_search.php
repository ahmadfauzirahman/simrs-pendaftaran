<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJournalSearch */
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

    <?= $form->field($model, 'journal_id') ?>

    <?= $form->field($model, 'journal_no') ?>

    <?= $form->field($model, 'journal_date') ?>

    <?= $form->field($model, 'journal_type_id') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'gl_period') ?>

    <?php // echo $form->field($model, 'gl_year') ?>

    <?php // echo $form->field($model, 'source') ?>

    <?php // echo $form->field($model, 'source_trans_id') ?>

    <?php // echo $form->field($model, 'reverse') ?>

    <?php // echo $form->field($model, 'reverse_date') ?>

    <?php // echo $form->field($model, 'by_system') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
