<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CosItem */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="cos-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cos_id')->textInput() ?>

    <?= $form->field($model, 'item_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'sales_disc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'sales_ret_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'inventory_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'sales_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'cogs_gl_acc_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
