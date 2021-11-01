<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedrecRequestSearch */
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

    <?= $form->field($model, 'mr_request_id') ?>

    <?= $form->field($model, 'from_location_id') ?>

    <?= $form->field($model, 'mr_request_date') ?>

    <?= $form->field($model, 'folio_id') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'request_type') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <?php // echo $form->field($model, 'mr_respond_date') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'status_patient') ?>

    <?php // echo $form->field($model, 'printed') ?>

    <?php // echo $form->field($model, 'bag') ?>

    <?php // echo $form->field($model, 'reg_id') ?>

    <?php // echo $form->field($model, 'return_date') ?>

    <?php // echo $form->field($model, 'return_user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
