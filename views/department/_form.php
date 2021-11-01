<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dept_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_in_charge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <?= $form->field($model, 'unit_caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_unit_caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'small_icon')->textInput() ?>

    <?= $form->field($model, 'large_icon')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tab_charges')->textInput() ?>

    <?= $form->field($model, 'tab_auto_charges')->textInput() ?>

    <?= $form->field($model, 'tab_anamnesis')->textInput() ?>

    <?= $form->field($model, 'tab_physical_exam')->textInput() ?>

    <?= $form->field($model, 'tab_other_exam')->textInput() ?>

    <?= $form->field($model, 'tab_diagnosis')->textInput() ?>

    <?= $form->field($model, 'tab_therapy')->textInput() ?>

    <?= $form->field($model, 'tab_procedure')->textInput() ?>

    <?= $form->field($model, 'tab_prognosis')->textInput() ?>

    <?= $form->field($model, 'tab_alergy')->textInput() ?>

    <?= $form->field($model, 'tab_degenerative')->textInput() ?>

    <?= $form->field($model, 'tab_chronic')->textInput() ?>

    <?= $form->field($model, 'tab_diet')->textInput() ?>

    <?= $form->field($model, 'tab_notes')->textInput() ?>

    <?= $form->field($model, 'gl_jtype_id')->textInput() ?>

    <?= $form->field($model, 'col_staff')->textInput() ?>

    <?= $form->field($model, 'refer_dept_code')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
