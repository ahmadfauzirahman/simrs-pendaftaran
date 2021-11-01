<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ApInvBind */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="ap-inv-bind-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bind_id')->textInput() ?>

    <?= $form->field($model, 'bind_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bind_date')->textInput() ?>

    <?= $form->field($model, 'vendor_reference')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vendor_id')->textInput() ?>

    <?= $form->field($model, 'return_date')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <?= $form->field($model, 'printed')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
