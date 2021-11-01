<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffFeeOtherCriteria */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="staff-fee-other-criteria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'staff_id')->textInput() ?>

    <?= $form->field($model, 'start_calc_date')->textInput() ?>

    <?= $form->field($model, 'guaranteed_amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'share_after_amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
