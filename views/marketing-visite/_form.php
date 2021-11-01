<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MarketingVisite */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="marketing-visite-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'marketing_id')->textInput() ?>

    <?= $form->field($model, 'marketing_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marketing_date')->textInput() ?>

    <?= $form->field($model, 'marketing_end_date')->textInput() ?>

    <?= $form->field($model, 'staff_1')->textInput() ?>

    <?= $form->field($model, 'staff_2')->textInput() ?>

    <?= $form->field($model, 'staff_3')->textInput() ?>

    <?= $form->field($model, 'staff_4')->textInput() ?>

    <?= $form->field($model, 'staff_5')->textInput() ?>

    <?= $form->field($model, 'reference_id')->textInput() ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

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
