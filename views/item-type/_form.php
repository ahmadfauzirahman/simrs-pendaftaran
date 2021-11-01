<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ItemType */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="item-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inventory')->textInput() ?>

    <?= $form->field($model, 'costing_method')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'sales_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'sales_disc_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'inventory_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'cogs_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'cat')->textInput() ?>

    <?= $form->field($model, 'sales_ret_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'costing_journal')->textInput() ?>

    <?= $form->field($model, 'item_category')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_category_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
