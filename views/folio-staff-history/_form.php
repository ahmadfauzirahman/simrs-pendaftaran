<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioStaffHistory */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-staff-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'staff_change_time')->textInput() ?>

    <?= $form->field($model, 'change_type')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
