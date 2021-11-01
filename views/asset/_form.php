<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Asset */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="asset-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'asset_id')->textInput() ?>

    <?= $form->field($model, 'asset_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_type_id')->textInput() ?>

    <?= $form->field($model, 'tax_valuation')->textInput() ?>

    <?= $form->field($model, 'acquisition_date')->textInput() ?>

    <?= $form->field($model, 'usage_date')->textInput() ?>

    <?= $form->field($model, 'disposal_date')->textInput() ?>

    <?= $form->field($model, 'selling_date')->textInput() ?>

    <?= $form->field($model, 'life_time')->textInput() ?>

    <?= $form->field($model, 'life_time_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asset_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'dep_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'accdep_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'disposal_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'sales_gl_acc_id')->textInput() ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_method')->textInput() ?>

    <?= $form->field($model, 'rate')->textInput() ?>

    <?= $form->field($model, 'asset_status')->textInput() ?>

    <?= $form->field($model, 'asset_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dep_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salvage_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'num_of_jvs')->textInput() ?>

    <?= $form->field($model, 'num_of_posted_jvs')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'asset_group_id')->textInput() ?>

    <?= $form->field($model, 'dept_id')->textInput() ?>

    <?= $form->field($model, 'manufacturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mfg_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mfg_date')->textInput() ?>

    <?= $form->field($model, 'serial_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marking')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warranty_date')->textInput() ?>

    <?= $form->field($model, 'last_mnt_date')->textInput() ?>

    <?= $form->field($model, 'mnt_period')->textInput() ?>

    <?= $form->field($model, 'picture')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'policy_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_date')->textInput() ?>

    <?= $form->field($model, 'ins_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_term')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_value')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ins_validity_from')->textInput() ?>

    <?= $form->field($model, 'ins_validity_to')->textInput() ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_in_charge')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'maintenanced_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_user_id')->textInput() ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <?= $form->field($model, 'modified_user_id')->textInput() ?>

    <?= $form->field($model, 'modified_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
