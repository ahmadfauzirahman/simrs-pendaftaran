<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DepartmentSearch */
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

    <?= $form->field($model, 'dept_id') ?>

    <?= $form->field($model, 'dept_name') ?>

    <?= $form->field($model, 'person_in_charge') ?>

    <?= $form->field($model, 'created_user_id') ?>

    <?= $form->field($model, 'created_time') ?>

    <?php // echo $form->field($model, 'modified_user_id') ?>

    <?php // echo $form->field($model, 'modified_time') ?>

    <?php // echo $form->field($model, 'unit_caption') ?>

    <?php // echo $form->field($model, 'sub_unit_caption') ?>

    <?php // echo $form->field($model, 'small_icon') ?>

    <?php // echo $form->field($model, 'large_icon') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'tab_charges') ?>

    <?php // echo $form->field($model, 'tab_auto_charges') ?>

    <?php // echo $form->field($model, 'tab_anamnesis') ?>

    <?php // echo $form->field($model, 'tab_physical_exam') ?>

    <?php // echo $form->field($model, 'tab_other_exam') ?>

    <?php // echo $form->field($model, 'tab_diagnosis') ?>

    <?php // echo $form->field($model, 'tab_therapy') ?>

    <?php // echo $form->field($model, 'tab_procedure') ?>

    <?php // echo $form->field($model, 'tab_prognosis') ?>

    <?php // echo $form->field($model, 'tab_alergy') ?>

    <?php // echo $form->field($model, 'tab_degenerative') ?>

    <?php // echo $form->field($model, 'tab_chronic') ?>

    <?php // echo $form->field($model, 'tab_diet') ?>

    <?php // echo $form->field($model, 'tab_notes') ?>

    <?php // echo $form->field($model, 'gl_jtype_id') ?>

    <?php // echo $form->field($model, 'col_staff') ?>

    <?php // echo $form->field($model, 'refer_dept_code') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
