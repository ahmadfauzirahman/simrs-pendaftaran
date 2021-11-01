<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FolioVerifikatorLabXt */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="folio-verifikator-lab-xt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fol_id')->textInput() ?>

    <?= $form->field($model, 'date_post')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
