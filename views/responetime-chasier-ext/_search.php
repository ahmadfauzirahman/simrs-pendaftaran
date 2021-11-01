<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResponetimeChasierExtSearch */
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

    <?= $form->field($model, 'datetime_lo') ?>

    <?= $form->field($model, 'datetime_adm') ?>

    <?= $form->field($model, 'datetime_close') ?>

    <?= $form->field($model, 'user_lo') ?>

    <?php // echo $form->field($model, 'user_adm') ?>

    <?php // echo $form->field($model, 'user_close') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'modified_notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
