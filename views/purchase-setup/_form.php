<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PurchaseSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="purchase-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'qty_received_restriction')->textInput() ?>

    <?= $form->field($model, 'qty_ordered_auto_calc')->textInput() ?>

    <?= $form->field($model, 'default_show_order')->textInput() ?>

    <?= $form->field($model, 'default_show_receipt')->textInput() ?>

    <?= $form->field($model, 'porder_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'preceipt_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'preceipt_default_qty')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
