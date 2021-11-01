<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ScrtPolicySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'policy_id') ?>

    <?= $form->field($model, 'policy_name') ?>

    <?= $form->field($model, 'notes') ?>

    <?= $form->field($model, 'login_option') ?>

    <?= $form->field($model, 'full_access_module') ?>

    <?php // echo $form->field($model, 'reg_menu_cap') ?>

    <?php // echo $form->field($model, 'order_menu_cap') ?>

    <?php // echo $form->field($model, 'billing_menu_cap') ?>

    <?php // echo $form->field($model, 'pos_menu_cap') ?>

    <?php // echo $form->field($model, 'allow_access_self_amount') ?>

    <?php // echo $form->field($model, 'allow_access_pay_by_amount') ?>

    <?php // echo $form->field($model, 'oe_allow_change_price') ?>

    <?php // echo $form->field($model, 'oe_allow_change_disc') ?>

    <?php // echo $form->field($model, 'oe_show_price_column') ?>

    <?php // echo $form->field($model, 'oe_show_disc_column') ?>

    <?php // echo $form->field($model, 'oe_show_tax_column') ?>

    <?php // echo $form->field($model, 'oe_show_total_amount_column') ?>

    <?php // echo $form->field($model, 'oe_show_self_amount_column') ?>

    <?php // echo $form->field($model, 'oe_show_pay_by_amount_column') ?>

    <?php // echo $form->field($model, 'oe_allow_change_self_amount') ?>

    <?php // echo $form->field($model, 'oe_allow_change_payby_amount') ?>

    <?php // echo $form->field($model, 'oe_allow_change_med_status') ?>

    <?php // echo $form->field($model, 'oe_allow_change_uom') ?>

    <?php // echo $form->field($model, 'exam_tab') ?>

    <?php // echo $form->field($model, 'built_in') ?>

    <?php // echo $form->field($model, 'custom_form_id') ?>

    <?php // echo $form->field($model, 'oe_allow_folio_correction') ?>

    <?php // echo $form->field($model, 'oe_allow_change_pay_by') ?>

    <?php // echo $form->field($model, 'oe_allow_change_reg_status') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
