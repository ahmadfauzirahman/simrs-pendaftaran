<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GlSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="gl-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'default_journal_type_id')->textInput() ?>

    <?= $form->field($model, 'default_show_journal')->textInput() ?>

    <?= $form->field($model, 'journal_slip_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
