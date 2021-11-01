<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmrPatientNotesSearch */
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

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'patient_notes_id') ?>

    <?= $form->field($model, 'notes_status') ?>

    <?= $form->field($model, 'notes_description') ?>

    <?php // echo $form->field($model, 'notes_created_time') ?>

    <?php // echo $form->field($model, 'notes_created_by') ?>

    <?php // echo $form->field($model, 'notes_modified_time') ?>

    <?php // echo $form->field($model, 'notes_modified_by') ?>

    <?php // echo $form->field($model, 'notes_cancelled_time') ?>

    <?php // echo $form->field($model, 'notes_cancelled_by') ?>

    <?php // echo $form->field($model, 'notes_cancellation_reason') ?>

    <?php // echo $form->field($model, 'notes_cancelled_signature') ?>

    <?php // echo $form->field($model, 'notes_verified_time') ?>

    <?php // echo $form->field($model, 'notes_verified_by') ?>

    <?php // echo $form->field($model, 'notes_verified_signature') ?>

    <?php // echo $form->field($model, 'notes_cosigned_time') ?>

    <?php // echo $form->field($model, 'notes_cosigned_by') ?>

    <?php // echo $form->field($model, 'notes_cosigned_signature') ?>

    <?php // echo $form->field($model, 'notes_cosigned2_time') ?>

    <?php // echo $form->field($model, 'notes_cosigned2_by') ?>

    <?php // echo $form->field($model, 'notes_cosigned2_signature') ?>

    <?php // echo $form->field($model, 'notes_cosigned3_time') ?>

    <?php // echo $form->field($model, 'notes_cosigned3_by') ?>

    <?php // echo $form->field($model, 'notes_cosigned3_signature') ?>

    <?php // echo $form->field($model, 'notes_cosigned4_time') ?>

    <?php // echo $form->field($model, 'notes_cosigned4_by') ?>

    <?php // echo $form->field($model, 'notes_cosigned4_signature') ?>

    <?php // echo $form->field($model, 'notes_cosigned5_time') ?>

    <?php // echo $form->field($model, 'notes_cosigned5_by') ?>

    <?php // echo $form->field($model, 'notes_cosigned5_signature') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
