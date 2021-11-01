<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaintAct */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="maint-act-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'job_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'request_time')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'location_mark')->textInput() ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'severity_id')->textInput() ?>

    <?= $form->field($model, 'request_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'requested_by')->textInput() ?>

    <?= $form->field($model, 'respond_time')->textInput() ?>

    <?= $form->field($model, 'responded_by')->textInput() ?>

    <?= $form->field($model, 'estimated_due_date')->textInput() ?>

    <?= $form->field($model, 'result_id')->textInput() ?>

    <?= $form->field($model, 'result_detail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'crew_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'request_photo')->textInput() ?>

    <?= $form->field($model, 'result_photo')->textInput() ?>

    <?= $form->field($model, 'posted_by')->textInput() ?>

    <?= $form->field($model, 'posted_time')->textInput() ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
