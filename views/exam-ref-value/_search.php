<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamRefValueSearch */
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

    <?= $form->field($model, 'exam_id') ?>

    <?= $form->field($model, 'seq') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'age_range1') ?>

    <?= $form->field($model, 'age_range2') ?>

    <?php // echo $form->field($model, 'age_unit') ?>

    <?php // echo $form->field($model, 'operator1') ?>

    <?php // echo $form->field($model, 'value1') ?>

    <?php // echo $form->field($model, 'conj') ?>

    <?php // echo $form->field($model, 'operator2') ?>

    <?php // echo $form->field($model, 'value2') ?>

    <?php // echo $form->field($model, 'plusmin') ?>

    <?php // echo $form->field($model, 'reference_value') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    </div>
    <!--.col-md-12-->
</div>
