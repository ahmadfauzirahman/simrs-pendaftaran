<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegSetupSearch */
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

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'reg_rpt_cat_id') ?>

    <?= $form->field($model, 'order_rpt_cat_id') ?>

    <?= $form->field($model, 'pos_rpt_cat_id') ?>

    <?= $form->field($model, 'billing_pmt_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'nurse_care_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'self_payby_id') ?>

    <?php // echo $form->field($model, 'bpjs_online_payby_id') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'folio_gl_posting_type') ?>

    <?php // echo $form->field($model, 'folio_gl_posting_date') ?>

    <?php // echo $form->field($model, 'folio_gl_posting_period') ?>

    <?php // echo $form->field($model, 'folio_gl_posting_year') ?>

    <?php // echo $form->field($model, 'folio_gl_journal_id_active') ?>

    <?php // echo $form->field($model, 'default_show_patient') ?>

    <?php // echo $form->field($model, 'rof_rpt_cat_id') ?>

    <?php // echo $form->field($model, 'sustatus_allowed_reg') ?>

    <?php // echo $form->field($model, 'reregister_restriction') ?>

    <?php // echo $form->field($model, 'auto_post_folio_refer') ?>

    <?php // echo $form->field($model, 'release_cancelled_rsvp') ?>

    <?php // echo $form->field($model, 'web_rsvp_url') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
