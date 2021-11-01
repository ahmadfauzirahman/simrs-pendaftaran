<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioDiag */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-diag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'intern_diag_id')->textInput() ?>

    <?= $form->field($model, 'icd_id')->textInput() ?>

    <?= $form->field($model, 'diag_type_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'validated_time')->textInput() ?>

    <?= $form->field($model, 'validated_by')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'deleted_time')->textInput() ?>

    <?= $form->field($model, 'deleted_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
