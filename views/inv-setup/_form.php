<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InvSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="inv-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'default_show_transfer')->textInput() ?>

    <?= $form->field($model, 'count_adjust_in_acc_id')->textInput() ?>

    <?= $form->field($model, 'count_adjust_out_acc_id')->textInput() ?>

    <?= $form->field($model, 'adj_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'transfer_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'count_rpt_cat_id')->textInput() ?>

    <?= $form->field($model, 'default_show_adjustment')->textInput() ?>

    <?= $form->field($model, 'default_show_count')->textInput() ?>

    <?= $form->field($model, 'adj_gl_jtype_id')->textInput() ?>

    <?= $form->field($model, 'default_show_item')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
