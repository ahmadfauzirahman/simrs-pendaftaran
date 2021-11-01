<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExamRefValue */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="exam-ref-value-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'exam_id')->textInput() ?>

    <?= $form->field($model, 'seq')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'age_range1')->textInput() ?>

    <?= $form->field($model, 'age_range2')->textInput() ?>

    <?= $form->field($model, 'age_unit')->textInput() ?>

    <?= $form->field($model, 'operator1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value1')->textInput() ?>

    <?= $form->field($model, 'conj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'operator2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'value2')->textInput() ?>

    <?= $form->field($model, 'plusmin')->textInput() ?>

    <?= $form->field($model, 'reference_value')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
