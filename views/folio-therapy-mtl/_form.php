<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioTherapyMtl */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-therapy-mtl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'material_seq')->textInput() ?>

    <?= $form->field($model, 'material_item_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'waste_pc')->textInput() ?>

    <?= $form->field($model, 'uom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_conversion')->textInput() ?>

    <?= $form->field($model, 'uom_id')->textInput() ?>

    <?= $form->field($model, 'unit_price')->textInput() ?>

    <?= $form->field($model, 'unit_discount')->textInput() ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
