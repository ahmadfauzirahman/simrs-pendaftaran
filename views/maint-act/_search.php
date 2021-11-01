<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaintActSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row mt-2">
    <div class="col-md-12">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'job_id') ?>

    <?= $form->field($model, 'job_no') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'request_time') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'location_mark') ?>

    <?php // echo $form->field($model, 'asset_id') ?>

    <?php // echo $form->field($model, 'contact_name') ?>

    <?php // echo $form->field($model, 'severity_id') ?>

    <?php // echo $form->field($model, 'request_detail') ?>

    <?php // echo $form->field($model, 'requested_by') ?>

    <?php // echo $form->field($model, 'respond_time') ?>

    <?php // echo $form->field($model, 'responded_by') ?>

    <?php // echo $form->field($model, 'estimated_due_date') ?>

    <?php // echo $form->field($model, 'result_id') ?>

    <?php // echo $form->field($model, 'result_detail') ?>

    <?php // echo $form->field($model, 'crew_member') ?>

    <?php // echo $form->field($model, 'request_photo') ?>

    <?php // echo $form->field($model, 'result_photo') ?>

    <?php // echo $form->field($model, 'posted_by') ?>

    <?php // echo $form->field($model, 'posted_time') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
