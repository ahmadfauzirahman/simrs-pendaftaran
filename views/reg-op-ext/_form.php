<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegOpExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="reg-op-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reg_op_id')->textInput() ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'reg_op_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_op')->textInput() ?>

    <?= $form->field($model, 'diag_medis_id')->textInput() ?>

    <?= $form->field($model, 'tind_medis_id')->textInput() ?>

    <?= $form->field($model, 'ot_1')->textInput() ?>

    <?= $form->field($model, 'ot_2')->textInput() ?>

    <?= $form->field($model, 'ot_3')->textInput() ?>

    <?= $form->field($model, 'ot_4')->textInput() ?>

    <?= $form->field($model, 'ot_5')->textInput() ?>

    <?= $form->field($model, 'ot_6')->textInput() ?>

    <?= $form->field($model, 'a_1')->textInput() ?>

    <?= $form->field($model, 'a_2')->textInput() ?>

    <?= $form->field($model, 'a_3')->textInput() ?>

    <?= $form->field($model, 'a_4')->textInput() ?>

    <?= $form->field($model, 'g_1')->textInput() ?>

    <?= $form->field($model, 'g_2')->textInput() ?>

    <?= $form->field($model, 'g_3')->textInput() ?>

    <?= $form->field($model, 'g_4')->textInput() ?>

    <?= $form->field($model, 'g_5')->textInput() ?>

    <?= $form->field($model, 'am_1')->textInput() ?>

    <?= $form->field($model, 'am_2')->textInput() ?>

    <?= $form->field($model, 'am_3')->textInput() ?>

    <?= $form->field($model, 'am_4')->textInput() ?>

    <?= $form->field($model, 'am_5')->textInput() ?>

    <?= $form->field($model, 'am_6')->textInput() ?>

    <?= $form->field($model, 'am_7')->textInput() ?>

    <?= $form->field($model, 'am_8')->textInput() ?>

    <?= $form->field($model, 'time_op1')->textInput() ?>

    <?= $form->field($model, 'time_op2')->textInput() ?>

    <?= $form->field($model, 'time_op3')->textInput() ?>

    <?= $form->field($model, 'staff_kons')->textInput() ?>

    <?= $form->field($model, 'staff_op')->textInput() ?>

    <?= $form->field($model, 'staff_anes')->textInput() ?>

    <?= $form->field($model, 'staff_panes')->textInput() ?>

    <?= $form->field($model, 'staff_anak')->textInput() ?>

    <?= $form->field($model, 'asisten_id')->textInput() ?>

    <?= $form->field($model, 'instrument_id')->textInput() ?>

    <?= $form->field($model, 'on_loop')->textInput() ?>

    <?= $form->field($model, 'sa_1')->textInput() ?>

    <?= $form->field($model, 'sa_2')->textInput() ?>

    <?= $form->field($model, 'ods_1')->textInput() ?>

    <?= $form->field($model, 'ods_2')->textInput() ?>

    <?= $form->field($model, 'ods_3')->textInput() ?>

    <?= $form->field($model, 'pj_id')->textInput() ?>

    <?= $form->field($model, 'rr_id')->textInput() ?>

    <?= $form->field($model, 'pa')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'spes_id')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'posted')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
