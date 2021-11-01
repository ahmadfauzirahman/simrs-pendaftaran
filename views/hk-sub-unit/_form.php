<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HkSubUnit */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="hk-sub-unit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sub_unit_id')->textInput() ?>

    <?= $form->field($model, 'hk_date')->textInput() ?>

    <?= $form->field($model, 'begin_status')->textInput() ?>

    <?= $form->field($model, 'end_status')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
