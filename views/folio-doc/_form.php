<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioDoc */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-doc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'doc_id')->textInput() ?>

    <?= $form->field($model, 'file_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attachment')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'validated_user_id')->textInput() ?>

    <?= $form->field($model, 'validated_time')->textInput() ?>

    <?= $form->field($model, 'deleted_user_id')->textInput() ?>

    <?= $form->field($model, 'deleted_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
