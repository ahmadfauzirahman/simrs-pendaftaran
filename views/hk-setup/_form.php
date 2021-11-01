<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HkSetup */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="hk-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'subunit_mgt_rpt_cat_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
