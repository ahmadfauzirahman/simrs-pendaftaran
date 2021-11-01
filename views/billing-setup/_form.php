<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BillingSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="billing-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'claim_mgmt_default_show_reg')->textInput() ?>

    <?= $form->field($model, 'bill_summary_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'billing_pmt_rpt_cat_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
