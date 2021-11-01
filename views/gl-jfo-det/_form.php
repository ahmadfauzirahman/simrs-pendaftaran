<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlJfoDet */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-jfo-det-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'journal_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'account_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput() ?>

    <?= $form->field($model, 'foreign_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exchange_rate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'item_mtl_id')->textInput() ?>

    <?= $form->field($model, 'item_kits_id')->textInput() ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'folio_seq')->textInput() ?>

    <?= $form->field($model, 'folio_mtl_seq')->textInput() ?>

    <?= $form->field($model, 'folio_kits_seq')->textInput() ?>

    <?= $form->field($model, 'folio_line_amount')->textInput() ?>

    <?= $form->field($model, 'tax1_id')->textInput() ?>

    <?= $form->field($model, 'tax1_amount')->textInput() ?>

    <?= $form->field($model, 'tax2_id')->textInput() ?>

    <?= $form->field($model, 'tax2_amount')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'processed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
