<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecMovementSearch */
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

    <?= $form->field($model, 'medrec_movement_id') ?>

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'registration_id') ?>

    <?= $form->field($model, 'from_location_id') ?>

    <?= $form->field($model, 'to_location_id') ?>

    <?php // echo $form->field($model, 'movement_date') ?>

    <?php // echo $form->field($model, 'posted_by_user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
