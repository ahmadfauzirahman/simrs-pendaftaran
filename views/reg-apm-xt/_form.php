<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegApmXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="reg-apm-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'date_cetak')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'post_rm')->textInput() ?>

    <?= $form->field($model, 'date_post_rm')->textInput() ?>

    <?= $form->field($model, 'flag_post')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
