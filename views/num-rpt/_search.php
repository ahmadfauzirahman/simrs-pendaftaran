<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NumRptSearch */
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

    <?= $form->field($model, 'numbering_id') ?>

    <?= $form->field($model, 'numbering_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'min_number') ?>

    <?= $form->field($model, 'max_number') ?>

    <?php // echo $form->field($model, 'next_number') ?>

    <?php // echo $form->field($model, 'format') ?>

    <?php // echo $form->field($model, 'reset_option') ?>

    <?php // echo $form->field($model, 'enable_reset') ?>

    <?php // echo $form->field($model, 'num_year') ?>

    <?php // echo $form->field($model, 'num_month') ?>

    <?php // echo $form->field($model, 'num_date') ?>

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
