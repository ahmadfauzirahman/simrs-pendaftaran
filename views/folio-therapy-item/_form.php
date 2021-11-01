<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioTherapyItem */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-therapy-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'folio_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'age_weight')->textInput() ?>

    <?= $form->field($model, 'total_qty')->textInput() ?>

    <?= $form->field($model, 'dtd')->textInput() ?>

    <?= $form->field($model, 'uom')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uom_conversion')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dosage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iter')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'posted_sent')->textInput() ?>

    <?= $form->field($model, 'deleted_sent')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'deleted_user_id')->textInput() ?>

    <?= $form->field($model, 'deleted_time')->textInput() ?>

    <?= $form->field($model, 'validated_by')->textInput() ?>

    <?= $form->field($model, 'validated_time')->textInput() ?>

    <?= $form->field($model, 'deleted_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
