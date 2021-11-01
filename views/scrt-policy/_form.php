<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicy */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="scrt-policy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'policy_id')->textInput() ?>

    <?= $form->field($model, 'policy_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'login_option')->textInput() ?>

    <?= $form->field($model, 'full_access_module')->textInput() ?>

    <?= $form->field($model, 'reg_menu_cap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_menu_cap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'billing_menu_cap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pos_menu_cap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allow_access_self_amount')->textInput() ?>

    <?= $form->field($model, 'allow_access_pay_by_amount')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_price')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_disc')->textInput() ?>

    <?= $form->field($model, 'oe_show_price_column')->textInput() ?>

    <?= $form->field($model, 'oe_show_disc_column')->textInput() ?>

    <?= $form->field($model, 'oe_show_tax_column')->textInput() ?>

    <?= $form->field($model, 'oe_show_total_amount_column')->textInput() ?>

    <?= $form->field($model, 'oe_show_self_amount_column')->textInput() ?>

    <?= $form->field($model, 'oe_show_pay_by_amount_column')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_self_amount')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_payby_amount')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_med_status')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_uom')->textInput() ?>

    <?= $form->field($model, 'exam_tab')->textInput() ?>

    <?= $form->field($model, 'built_in')->textInput() ?>

    <?= $form->field($model, 'custom_form_id')->textInput() ?>

    <?= $form->field($model, 'oe_allow_folio_correction')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_pay_by')->textInput() ?>

    <?= $form->field($model, 'oe_allow_change_reg_status')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
