<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="reg-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'reg_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'order_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'pos_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'billing_pmt_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'nurse_care_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'self_payby_id')->textInput() ?>

    <?= $form->field($model, 'bpjs_online_payby_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'folio_gl_posting_type')->textInput() ?>

    <?= $form->field($model, 'folio_gl_posting_date')->textInput() ?>

    <?= $form->field($model, 'folio_gl_posting_period')->textInput() ?>

    <?= $form->field($model, 'folio_gl_posting_year')->textInput() ?>

    <?= $form->field($model, 'folio_gl_journal_id_active')->textInput() ?>

    <?= $form->field($model, 'default_show_patient')->textInput() ?>

    <?= $form->field($model, 'rof_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'sustatus_allowed_reg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reregister_restriction')->textInput() ?>

    <?= $form->field($model, 'auto_post_folio_refer')->textInput() ?>

    <?= $form->field($model, 'release_cancelled_rsvp')->textInput() ?>

    <?= $form->field($model, 'web_rsvp_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
