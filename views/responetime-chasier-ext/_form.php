<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ResponetimeChasierExt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="responetime-chasier-ext-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'reg_id')->textInput() ?>

    <?= $form->field($model, 'datetime_lo')->textInput() ?>

    <?= $form->field($model, 'datetime_adm')->textInput() ?>

    <?= $form->field($model, 'datetime_close')->textInput() ?>

    <?= $form->field($model, 'user_lo')->textInput() ?>

    <?= $form->field($model, 'user_adm')->textInput() ?>

    <?= $form->field($model, 'user_close')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'modified_notes')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
