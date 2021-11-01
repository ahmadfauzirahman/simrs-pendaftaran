<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecMovement */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="medrec-movement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'registration_id')->textInput() ?>

    <?= $form->field($model, 'from_location_id')->textInput() ?>

    <?= $form->field($model, 'to_location_id')->textInput() ?>

    <?= $form->field($model, 'movement_date')->textInput() ?>

    <?= $form->field($model, 'posted_by_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
