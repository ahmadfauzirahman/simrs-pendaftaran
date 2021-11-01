<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioCosChange */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-cos-change-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'approval_user_id')->textInput() ?>

    <?= $form->field($model, 'approval_date')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
