<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecTransferDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="medrec-transfer-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mr_transfer_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
