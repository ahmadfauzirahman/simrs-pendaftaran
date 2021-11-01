<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ActivityMntncSearch */
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

    <?= $form->field($model, 'activity_id') ?>

    <?= $form->field($model, 'activity_no') ?>

    <?= $form->field($model, 'staff_id') ?>

    <?= $form->field($model, 'staff_id2') ?>

    <?= $form->field($model, 'staff_id3') ?>

    <?php // echo $form->field($model, 'staff_id4') ?>

    <?php // echo $form->field($model, 'activity_date') ?>

    <?php // echo $form->field($model, 'unit_request') ?>

    <?php // echo $form->field($model, 'start_activity') ?>

    <?php // echo $form->field($model, 'end_activity') ?>

    <?php // echo $form->field($model, 'end_durasi') ?>

    <?php // echo $form->field($model, 'activity_type') ?>

    <?php // echo $form->field($model, 'object_other') ?>

    <?php // echo $form->field($model, 'object_asset') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <?php // echo $form->field($model, 'created_user_id') ?>

    <?php // echo $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'posted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
